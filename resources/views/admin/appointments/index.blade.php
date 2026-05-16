@extends('admin.layout')

@section('title', 'Appointments')

@section('content')
    <div class="panel">
        <div class="header-row">
            <div>
                <h1>Appointments</h1>
                <p>Review incoming appointment requests.</p>
            </div>
        </div>

        <div class="filters">
            <a class="btn light" href="{{ route('admin.appointments.index') }}">All</a>
            <a class="btn light" href="{{ route('admin.appointments.index', ['status' => 'pending']) }}">Pending</a>
            <a class="btn light" href="{{ route('admin.appointments.index', ['status' => 'accepted']) }}">Accepted</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Patient</th>
                    <th>Contact</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Received</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($appointments as $appointment)
                    <tr>
                        <td>
                            <strong>{{ $appointment->patient_name }}</strong><br>
                            {{ $appointment->gender ?: 'No gender' }}
                        </td>
                        <td>
                            {{ $appointment->email }}<br>
                            {{ $appointment->phone }}
                        </td>
                        <td>{{ $appointment->appointment_date?->format('Y-m-d') }}</td>
                        <td><span class="badge">{{ $appointment->status }}</span></td>
                        <td>{{ $appointment->created_at?->format('Y-m-d H:i') }}</td>
                        <td>
                            <div class="actions">
                                <form method="post" action="{{ route('admin.appointments.status', $appointment) }}">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="accepted">
                                    <button type="submit" class="btn secondary">Accept</button>
                                </form>
                                <form method="post" action="{{ route('admin.appointments.status', $appointment) }}">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="refused">
                                    <button type="submit" class="btn danger">Refuse</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No appointments yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="pagination">
            {{ $appointments->links() }}
        </div>
    </div>
@endsection
