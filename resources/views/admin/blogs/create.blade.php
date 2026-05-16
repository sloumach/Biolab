@extends('admin.layout')

@section('title', 'Créer un article')

@section('content')
    <div class="panel">
        <div class="header-row">
            <div>
                <h1>Créer un article</h1>
                <p>Publiez un nouvel article sur le site public.</p>
            </div>
            <a href="{{ route('admin.blogs.index') }}" class="btn light">Retour</a>
        </div>

        @include('admin.blogs._form', [
            'action' => route('admin.blogs.store'),
            'submitLabel' => 'Créer l’article',
        ])
    </div>
@endsection
