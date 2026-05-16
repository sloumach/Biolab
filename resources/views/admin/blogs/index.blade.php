@extends('admin.layout')

@section('title', 'Articles')

@section('content')
    <div class="panel">
        <div class="header-row">
            <div>
                <h1>Articles</h1>
                <p>Gérez les contenus publiés dans la rubrique blog du site.</p>
            </div>
            <a href="{{ route('admin.blogs.create') }}" class="btn">Nouvel article</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Catégorie</th>
                    <th>Récent</th>
                    <th>Créé le</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($blogs as $blog)
                    <tr>
                        <td>
                            @if ($blog->image_path)
                                <img src="{{ asset('storage/'.$blog->image_path) }}" alt="{{ $blog->title }}" style="width: 84px; height: 56px; object-fit: cover; border-radius: 6px;">
                            @else
                                Aucune image
                            @endif
                        </td>
                        <td>
                            <strong>{{ $blog->title }}</strong><br>
                            <a href="{{ route('blog.single', $blog) }}" target="_blank">Voir la page publique</a>
                        </td>
                        <td>{{ $blog->category }}</td>
                        <td>{{ $blog->latest ? 'Oui' : 'Non' }}</td>
                        <td>{{ $blog->created_at?->format('Y-m-d H:i') }}</td>
                        <td>
                            <div class="actions">
                                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn secondary">Modifier</a>
                                <form method="post" action="{{ route('admin.blogs.destroy', $blog) }}" onsubmit="return confirm('Supprimer cet article ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn danger">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Aucun article pour le moment.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="pagination">
            {{ $blogs->links() }}
        </div>
    </div>
@endsection
