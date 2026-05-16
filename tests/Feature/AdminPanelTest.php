<?php

namespace Tests\Feature;

use App\Models\Appointment;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminPanelTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_create_blog_and_update_appointment_status(): void
    {
        Storage::fake('public');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'password',
            'is_admin' => true,
        ]);

        $appointment = Appointment::create([
            'patient_name' => 'Jane Patient',
            'email' => 'jane@example.com',
            'phone' => '+36 55 540 069',
            'gender' => 'Female',
            'appointment_date' => '2026-05-12',
        ]);

        $this->actingAs($admin)
            ->post(route('admin.blogs.store'), [
                'title' => 'New Lab Research',
                'content' => 'Research content.',
                'category' => 'Research',
                'image' => $this->fakePngUpload('blog.png'),
                'latest' => '1',
            ])
            ->assertRedirect(route('admin.blogs.index'));

        $blog = Blog::firstOrFail();

        $this->assertDatabaseHas('blogs', [
            'title' => 'New Lab Research',
            'category' => 'Research',
            'latest' => true,
        ]);

        Storage::disk('public')->assertExists($blog->image_path);

        $this->actingAs($admin)
            ->patch(route('admin.appointments.status', $appointment), [
                'status' => 'accepted',
            ])
            ->assertRedirect();

        $this->assertDatabaseHas('appointments', [
            'id' => $appointment->id,
            'status' => 'accepted',
        ]);
    }

    public function test_admin_refuses_appointment_by_deleting_it(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'password',
            'is_admin' => true,
        ]);

        $appointment = Appointment::create([
            'patient_name' => 'Jane Patient',
            'email' => 'jane@example.com',
            'phone' => '+36 55 540 069',
            'gender' => 'Female',
            'appointment_date' => '2026-05-12',
        ]);

        $this->actingAs($admin)
            ->patch(route('admin.appointments.status', $appointment), [
                'status' => 'refused',
            ])
            ->assertRedirect();

        $this->assertDatabaseMissing('appointments', [
            'id' => $appointment->id,
        ]);
    }

    public function test_admin_can_update_and_delete_blog(): void
    {
        Storage::fake('public');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'password',
            'is_admin' => true,
        ]);

        Storage::disk('public')->put('blogs/original.png', 'old image');

        $blog = Blog::create([
            'title' => 'Original Title',
            'content' => 'Original content.',
            'category' => 'Research',
            'image_path' => 'blogs/original.png',
            'latest' => true,
        ]);

        $this->actingAs($admin)
            ->put(route('admin.blogs.update', $blog), [
                'title' => 'Updated Title',
                'content' => 'Updated content.',
                'category' => 'Diagnostics',
                'image' => $this->fakePngUpload('updated.png'),
            ])
            ->assertRedirect(route('admin.blogs.index'));

        $blog->refresh();

        $this->assertDatabaseHas('blogs', [
            'id' => $blog->id,
            'title' => 'Updated Title',
            'content' => 'Updated content.',
            'category' => 'Diagnostics',
            'latest' => false,
        ]);

        Storage::disk('public')->assertMissing('blogs/original.png');
        Storage::disk('public')->assertExists($blog->image_path);

        $imagePath = $blog->image_path;

        $this->actingAs($admin)
            ->delete(route('admin.blogs.destroy', $blog))
            ->assertRedirect(route('admin.blogs.index'));

        $this->assertDatabaseMissing('blogs', [
            'id' => $blog->id,
        ]);

        Storage::disk('public')->assertMissing($imagePath);
    }

    public function test_non_admin_cannot_access_admin_pages(): void
    {
        $user = User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => 'password',
            'is_admin' => false,
        ]);

        $this->actingAs($user)
            ->get(route('admin.appointments.index'))
            ->assertForbidden();
    }

    private function fakePngUpload(string $name): UploadedFile
    {
        $path = tempnam(sys_get_temp_dir(), 'blog-image-');

        file_put_contents($path, base64_decode(
            'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+/p9sAAAAASUVORK5CYII='
        ));

        return new UploadedFile($path, $name, 'image/png', null, true);
    }
}
