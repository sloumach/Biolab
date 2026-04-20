@extends('admin.layout')

@section('title', 'Login')

@section('content')
    <div class="panel" style="max-width: 460px; margin: 70px auto;">
        <h1>Admin Login</h1>
        <form method="post" action="{{ route('admin.login.store') }}">
            @csrf
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>

            <label style="font-weight: 400;">
                <input type="checkbox" name="remember" value="1" style="width: auto;">
                Remember me
            </label>

            <button type="submit" class="btn">Login</button>
        </form>
    </div>
@endsection
