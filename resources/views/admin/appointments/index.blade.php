@extends('admin.layout')

@section('title', 'Rendez-vous')

@section('content')
    <div class="panel">
        <div class="header-row">
            <div>
                <h1>Rendez-vous</h1>
                <p>Consultez les demandes de rendez-vous reçues.</p>
            </div>
        </div>

        <div class="filters">
            <a class="btn light" href="{{ route('admin.appointments.index') }}">Tous</a>
            <a class="btn light" href="{{ route('admin.appointments.index', ['status' => 'pending']) }}">En attente</a>
            <a class="btn light" href="{{ route('admin.appointments.index', ['status' => 'accepted']) }}">Acceptés</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Patient</th>
                    <th>Contact</th>
                    <th>Date</th>
                    <th>Statut</th>
                    <th>Reçu le</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($appointments as $appointment)
                    <tr>
                        <td>
                            <strong>{{ $appointment->patient_name }}</strong><br>
                            {{ ['Male' => 'Homme', 'Female' => 'Femme', 'Other' => 'Autre'][$appointment->gender] ?? 'Genre non renseigné' }}
                        </td>
                        <td>
                            {{ $appointment->email }}<br>
                            {{ $appointment->phone }}
                        </td>
                        <td>{{ $appointment->appointment_date?->format('Y-m-d') }}</td>
                        <td><span class="badge">{{ ['pending' => 'En attente', 'accepted' => 'Accepté', 'refused' => 'Refusé'][$appointment->status] ?? $appointment->status }}</span></td>
                        <td>{{ $appointment->created_at?->format('Y-m-d H:i') }}</td>
                        <td>
                            <div class="actions">
                                <form method="post" action="{{ route('admin.appointments.status', $appointment) }}">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="accepted">
                                    <button type="submit" class="btn secondary">Accepter</button>
                                </form>
                                <form method="post" action="{{ route('admin.appointments.status', $appointment) }}">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="refused">
                                    <button type="submit" class="btn danger">Refuser</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Aucun rendez-vous pour le moment.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="pagination">
            {{ $appointments->links() }}
        </div>
    </div>
@endsection
