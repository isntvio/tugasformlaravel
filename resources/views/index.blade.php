<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white text-center py-4">
        <h1>Media Online</h1>
    </header>
    <main class="container mt-5">
        <h2 class="text-center">Sosial Media Developer</h2>
        <p class="text-center">Belajar dan berbagi agar hidup menjadi lebih baik</p>
        <div class="row">
            <div class="col-12">
                <h3>Benefit Join Di Media</h3>
                <ul class="list-group">
                    <li class="list-group-item">Mendapatkan motivasi dari sesama para Developer</li>
                    <li class="list-group-item">Sharing Knowledge</li>
                    <li class="list-group-item">Dibuat oleh calon web Developer terbaik</li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <h3>Cara Bergabung Ke Media Online</h3>
                <ol>
                    <li>Mengunjungi Website Ini</li>
                    <li>Mendaftarkan di <a href="{{ route('form') }}">Form Sign Up</a></li>
                    <li>Selesai</li>
                </ol>
            </div>
        </div>
    </main>
</body>
</html>