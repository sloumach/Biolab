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
                ->post(route('appointment.store'), [], $server)
                ->assertRedirect(route('appointment'));
        }

        $this->from(route('appointment'))
            ->post(route('appointment.store'), [], $server)
            ->assertTooManyRequests();
    }
}
