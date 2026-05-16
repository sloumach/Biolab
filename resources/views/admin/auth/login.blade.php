@extends('admin.layout')

@section('title', 'Connexion')

@section('content')
    <div class="panel" style="max-width: 460px; margin: 70px auto;">
        <h1>Connexion administrateur</h1>
        <form method="post" action="{{ route('admin.login.store') }}">
            @csrf
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

            <label for="password">Mot de passe</label>
            <input id="password" type="password" name="password" required>

            <label style="font-weight: 400;">
                <input type="checkbox" name="remember" value="1" style="width: auto;">
                Se souvenir de moi
            </label>

            <button type="submit" class="btn">Se connecter</button>
        </form>
    </div>
@endsection
