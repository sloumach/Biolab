@extends('admin.layout')

@section('title', 'Modifier un article')

@section('content')
    <div class="panel">
        <div class="header-row">
            <div>
                <h1>Modifier un article</h1>
                <p>Mettez à jour cet article public.</p>
            </div>
            <a href="{{ route('admin.blogs.index') }}" class="btn light">Retour</a>
        </div>

        @include('admin.blogs._form', [
            'action' => route('admin.blogs.update', $blog),
            'method' => 'PUT',
            'submitLabel' => 'Mettre à jour l’article',
        ])
    </div>
@endsection
