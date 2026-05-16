@extends('admin.layout')

@section('title', 'Blogs')

@section('content')
    <div class="panel">
        <div class="header-row">
            <div>
                <h1>Blogs</h1>
                <p>Create content for the public blog section.</p>
            </div>
            <a href="{{ route('admin.blogs.create') }}" class="btn">New Blog</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Latest</th>
                    <th>Created</th>
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
                                No image
                            @endif
                        </td>
                        <td>
                            <strong>{{ $blog->title }}</strong><br>
                            <a href="{{ route('blog.single', $blog) }}" target="_blank">View public page</a>
                        </td>
                        <td>{{ $blog->category }}</td>
                        <td>{{ $blog->latest ? 'Yes' : 'No' }}</td>
                        <td>{{ $blog->created_at?->format('Y-m-d H:i') }}</td>
                        <td>
                            <div class="actions">
                                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn secondary">Edit</a>
                                <form method="post" action="{{ route('admin.blogs.destroy', $blog) }}" onsubmit="return confirm('Delete this blog?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No blogs yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="pagination">
            {{ $blogs->links() }}
        </div>
    </div>
@endsection
