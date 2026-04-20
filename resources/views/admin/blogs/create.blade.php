@extends('admin.layout')

@section('title', 'Create Blog')

@section('content')
    <div class="panel">
        <div class="header-row">
            <div>
                <h1>Create Blog</h1>
                <p>Publish a new article for the public site.</p>
            </div>
            <a href="{{ route('admin.blogs.index') }}" class="btn light">Back</a>
        </div>

        <form method="post" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
            @csrf
            <label for="title">Title</label>
            <input id="title" type="text" name="title" value="{{ old('title') }}" required>

            <label for="category">Category</label>
            <input id="category" type="text" name="category" value="{{ old('category') }}" required>

            <label for="image">Image</label>
            <input id="image" type="file" name="image" accept="image/*">

            <label for="content">Content</label>
            <textarea id="content" name="content" required>{{ old('content') }}</textarea>

            <label style="font-weight: 400;">
                <input type="checkbox" name="latest" value="1" @checked(old('latest')) style="width: auto;">
                Mark as latest
            </label>

            <button type="submit" class="btn">Create Blog</button>
        </form>
    </div>
@endsection
