@extends('admin.layout')

@section('title', 'Edit Blog')

@section('content')
    <div class="panel">
        <div class="header-row">
            <div>
                <h1>Edit Blog</h1>
                <p>Update this public article.</p>
            </div>
            <a href="{{ route('admin.blogs.index') }}" class="btn light">Back</a>
        </div>

        @include('admin.blogs._form', [
            'action' => route('admin.blogs.update', $blog),
            'method' => 'PUT',
            'submitLabel' => 'Update Blog',
        ])
    </div>
@endsection
