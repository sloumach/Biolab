<?php

namespace Tests\Feature;

use Tests\TestCase;

class AppointmentRateLimitTest extends TestCase
{
    public function test_appointment_post_is_rate_limited(): void
    {
        $server = ['REMOTE_ADDR' => '203.0.113.10'];

        for ($attempt = 1; $attempt <= 5; $attempt++) {
            $this->from(route('appointment'))
                ->post(route('appointment.store'), [
                    'email' => "patient{$attempt}@example.com",
                ], $server)
                ->assertRedirect(route('appointment'));
        }

        $this->from(route('appointment'))
            ->post(route('appointment.store'), [
                'email' => 'patient6@example.com',
            ], $server)
            ->assertTooManyRequests();
    }

    public function test_appointment_post_is_limited_to_two_requests_per_day(): void
    {
        $server = ['REMOTE_ADDR' => '203.0.113.20'];
        $payload = ['email' => 'patient@example.com'];

        for ($attempt = 1; $attempt <= 2; $attempt++) {
            $this->from(route('appointment'))
                ->post(route('appointment.store'), $payload, $server)
                ->assertRedirect(route('appointment'));
        }

        $this->from(route('appointment'))
            ->post(route('appointment.store'), $payload, $server)
            ->assertTooManyRequests();
    }
}
