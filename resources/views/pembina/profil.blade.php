<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pembina</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="p-4 shadow card rounded-3" style="max-width: 450px; margin: auto;">
        <h3 class="mb-4 text-center">Profil Pembina</h3>

        <div class="mb-3">
            <label class="fw-bold">Username:</label>
            <p class="form-control">{{ $user->name }}</p>
        </div>

        <div class="mb-3">
            <label class="fw-bold">Email:</label>
            <p class="form-control">{{ $user->email }}</p>
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger w-100">Logout</button>
        </form>
    </div>
</div>

</body>
</html>
