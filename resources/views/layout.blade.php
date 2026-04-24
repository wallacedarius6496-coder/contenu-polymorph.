<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenu Polymorph</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f0f2f5; font-family: 'Segoe UI', sans-serif; }
        .navbar { background: linear-gradient(135deg, #1a1a2e, #16213e) !important; }
        .navbar-brand { font-weight: 800; font-size: 1.5rem; letter-spacing: 1px; }
        .card { border-radius: 16px; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.08); }
        .card:hover { transform: translateY(-3px); transition: 0.3s; }
        .badge { border-radius: 20px; padding: 6px 12px; }
        h2 { font-weight: 800; }
    </style>
</head>
<body>
<nav class="navbar navbar-dark px-4 py-3 mb-4 shadow">
    <a class="navbar-brand text-white" href="#">🎯 Contenu Polymorph</a>
    <div>
        <a href="/articles" class="btn btn-outline-light me-2">📄 Articles</a>
        <a href="/videos" class="btn btn-outline-light">🎬 Vidéos</a>
    </div>
</nav>
<div class="container mt-2">
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>