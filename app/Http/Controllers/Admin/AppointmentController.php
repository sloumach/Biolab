<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class AppointmentController extends Controller
{
    public function index(Request $request): View
    {
        $status = $request->query('status');

        $appointments = Appointment::query()
            ->when($status, fn ($query) => $query->where('status', $status))
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.appointments.index', compact('appointments', 'status'));
    }

    public function updateStatus(Request $request, Appointment $appointment): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', Rule::in(['accepted', 'refused'])],
        ]);

        if ($validated['status'] === 'refused') {
            $appointment->delete();

            return back()->with('success', 'Appointment refused and deleted.');
        }

        $appointment->update($validated);

        return back()->with('success', 'Appointment status updated.');
    }
}
