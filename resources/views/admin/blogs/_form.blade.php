<form method="post" action="{{ $action }}" enctype="multipart/form-data">
    @csrf
    @isset($method)
        @method($method)
    @endisset

    <label for="title">Title</label>
    <input id="title" type="text" name="title" value="{{ old('title', $blog->title ?? '') }}" required>

    <label for="category">Category</label>
    <input id="category" type="text" name="category" value="{{ old('category', $blog->category ?? '') }}" required>

    <label for="image">Image</label>
    @isset($blog)
        @if ($blog->image_path)
            <div style="margin-bottom: 10px;">
                <img src="{{ asset('storage/'.$blog->image_path) }}" alt="{{ $blog->title }}" style="width: 120px; height: 80px; object-fit: cover; border-radius: 6px;">
            </div>
        @endif
    @endisset
    <input id="image" type="file" name="image" accept="image/*">

    <label for="content">Content</label>
    <textarea id="content" name="content" required>{{ old('content', $blog->content ?? '') }}</textarea>

    <label style="font-weight: 400;">
        <input type="checkbox" name="latest" value="1" @checked(old('latest', $blog->latest ?? false)) style="width: auto;">
        Mark as latest
    </label>

    <button type="submit" class="btn">{{ $submitLabel }}</button>
</form>
