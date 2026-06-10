<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Administration') - Biolab</title>
        <style>
            body { margin: 0; font-family: Arial, sans-serif; background: #f5f7fb; color: #172033; }
            a { color: #0b7285; text-decoration: none; }
            .topbar { background: #102a43; color: #fff; padding: 16px 28px; display: flex; align-items: center; justify-content: space-between; }
            .topbar a, .topbar button { color: #fff; }
            .nav { display: flex; gap: 18px; align-items: center; }
            .logout { background: transparent; border: 0; cursor: pointer; font: inherit; padding: 0; }
            .wrap { max-width: 1120px; margin: 32px auto; padding: 0 18px; }
            .panel { background: #fff; border: 1px solid #d9e2ec; border-radius: 8px; padding: 22px; }
            .header-row { display: flex; align-items: center; justify-content: space-between; gap: 16px; margin-bottom: 18px; }
            .btn { border: 0; border-radius: 6px; background: #0b7285; color: #fff; padding: 10px 14px; cursor: pointer; display: inline-block; }
            .btn.danger { background: #c92a2a; }
            .btn.secondary { background: #364fc7; }
            .btn.light { background: #e7f5ff; color: #0b7285; }
            table { width: 100%; border-collapse: collapse; }
            th, td { text-align: left; border-bottom: 1px solid #e6edf5; padding: 12px 10px; vertical-align: top; }
            th { font-size: 13px; text-transform: uppercase; color: #52616f; }
            input, textarea, select { width: 100%; border: 1px solid #bcccdc; border-radius: 6px; padding: 10px; box-sizing: border-box; }
            textarea { min-height: 220px; resize: vertical; }
            label { display: block; font-weight: 700; margin: 14px 0 6px; }
            .alert { border-radius: 6px; padding: 12px 14px; margin-bottom: 18px; }
            .success { background: #e6fcf5; color: #087f5b; }
            .error { background: #fff5f5; color: #c92a2a; }
            .actions { display: flex; gap: 8px; flex-wrap: wrap; }
            .badge { display: inline-block; border-radius: 999px; padding: 4px 9px; background: #edf2ff; color: #364fc7; font-size: 13px; }
            .filters { display: flex; gap: 8px; margin-bottom: 16px; flex-wrap: wrap; }
            .pagination { margin-top: 18px; }
        </style>
    </head>
    <body>
        <header class="topbar">
            <strong>Administration Biolab</strong>
            @auth
                <nav class="nav">
                    <a href="{{ route('admin.appointments.index') }}">Rendez-vous</a>
                    <a href="{{ route('admin.complaints.index') }}">R&eacute;clamations</a>
                    <a href="{{ route('admin.blogs.index') }}">Articles</a>
                    <form method="post" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="logout">Déconnexion</button>
                    </form>
                </nav>
            @endauth
        </header>
        <main class="wrap">
            @if (session('success'))
                <div class="alert success">{{ session('success') }}</div>
            @endif
            @if ($errors->any())
                <div class="alert error">{{ $errors->first() }}</div>
            @endif
            @yield('content')
        </main>
    </body>
</html>
