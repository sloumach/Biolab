<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\RequiresPhpExtension;
use Tests\TestCase;

class AppointmentFlowTest extends TestCase
{
    use RefreshDatabase;

    #[RequiresPhpExtension('pdo_sqlite')]
    public function test_appointment_request_is_saved(): void
    {
        $response = $this->post(route('appointment.store'), [
            'patient_name' => 'Jane Patient',
            'email' => 'jane@example.com',
            'phone' => '+36 55 540 069',
            'gender' => 'Female',
            'appointment_date' => '2026-05-12',
        ]);

        $response
            ->assertRedirect()
            ->assertSessionHas('success');

        $this->assertDatabaseHas('appointments', [
            'patient_name' => 'Jane Patient',
            'email' => 'jane@example.com',
            'phone' => '+36 55 540 069',
            'gender' => 'Female',
            'appointment_date' => '2026-05-12',
            'status' => 'pending',
        ]);
    }
}
