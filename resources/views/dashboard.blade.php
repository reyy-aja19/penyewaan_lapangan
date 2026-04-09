<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">
    <h2>Dashboard</h2>

    <div class="card mt-3 p-3">
        <h4>Selamat datang, {{ $user->nama }} 👋</h4>
        <p>Email: {{ $user->email }}</p>
        <p>Role: {{ $user->role }}</p>
    </div>

    <form method="POST" action="/logout" class="mt-3">
        @csrf
        <button class="btn btn-danger">Logout</button>
    </form>
</div>

</body>
</html>
