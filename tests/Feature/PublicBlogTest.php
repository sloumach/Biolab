<?php

namespace Tests\Feature;

use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicBlogTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_displays_three_most_recent_blogs(): void
    {
        $oldBlog = Blog::create([
            'title' => 'Old Blog',
            'content' => 'Old content',
            'category' => 'Old',
        ]);
        $oldBlog->forceFill([
            'created_at' => now()->subDays(4),
            'updated_at' => now()->subDays(4),
        ])->save();

        $recentOne = Blog::create([
            'title' => 'Recent One',
            'content' => 'Content one',
            'category' => 'Research',
        ]);
        $recentOne->forceFill([
            'created_at' => now()->subDays(3),
            'updated_at' => now()->subDays(3),
        ])->save();

        $recentTwo = Blog::create([
            'title' => 'Recent Two',
            'content' => 'Content two',
            'category' => 'Science',
        ]);
        $recentTwo->forceFill([
            'created_at' => now()->subDays(2),
            'updated_at' => now()->subDays(2),
        ])->save();

        $recentThree = Blog::create([
            'title' => 'Recent Three',
            'content' => 'Content three',
            'category' => 'Business',
        ]);
        $recentThree->forceFill([
            'created_at' => now()->subDay(),
            'updated_at' => now()->subDay(),
        ])->save();

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Recent One')
            ->assertSee('Recent Two')
            ->assertSee('Recent Three')
            ->assertDontSee('Old Blog');
    }

    public function test_blog_single_displays_selected_blog(): void
    {
        $blog = Blog::create([
            'title' => 'Selected Blog',
            'content' => 'Selected content',
            'category' => 'Research',
        ]);

        $this->get(route('blog.single', $blog))
            ->assertOk()
            ->assertSee('Selected Blog')
            ->assertSee('Selected content')
            ->assertSee('Research');
    }
}
