@extends('admin.layout')

@section('title', 'Reclamations')

@section('content')
    <div class="panel">
        <div class="header-row">
            <div>
                <h1>R&eacute;clamations</h1>
                <p>Consultez les r&eacute;clamations envoy&eacute;es depuis le site.</p>
            </div>
        </div>

        <div class="filters">
            <a class="btn light" href="{{ route('admin.complaints.index') }}">Toutes</a>
            <a class="btn light" href="{{ route('admin.complaints.index', ['status' => 'pending']) }}">En attente</a>
            <a class="btn light" href="{{ route('admin.complaints.index', ['status' => 'handled']) }}">Trait&eacute;es</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nom et pr&eacute;nom</th>
                    <th>T&eacute;l&eacute;phone</th>
                    <th>Message</th>
                    <th>Statut</th>
                    <th>Re&ccedil;u le</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($complaints as $complaint)
                    <tr>
                        <td><strong>{{ $complaint->full_name }}</strong></td>
                        <td>{{ $complaint->phone }}</td>
                        <td>{{ $complaint->message }}</td>
                        <td><span class="badge">{{ ['pending' => 'En attente', 'handled' => 'Traitee'][$complaint->status] ?? $complaint->status }}</span></td>
                        <td>{{ $complaint->created_at?->format('Y-m-d H:i') }}</td>
                        <td>
                            <div class="actions">
                                @if ($complaint->status !== 'handled')
                                    <form method="post" action="{{ route('admin.complaints.status', $complaint) }}">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="handled">
                                        <button type="submit" class="btn secondary">Traiter</button>
                                    </form>
                                @endif
                                <form method="post" action="{{ route('admin.complaints.status', $complaint) }}" onsubmit="return confirm('Supprimer cette reclamation ?');">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="deleted">
                                    <button type="submit" class="btn danger">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Aucune r&eacute;clamation pour le moment.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="pagination">
            {{ $complaints->links() }}
        </div>
    </div>
@endsection
