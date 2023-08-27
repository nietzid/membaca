<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membaca - Dashboard</title>
    <link rel="stylesheet" href="/css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex flex-row justify-content-between">
        <div class="d-flex flex-column row m-5">
            <h1 class="text-white">Hi <?= session('nama') ?>!</h1>
            <h2 class="text-white">Selamat, saat ini kamu level <?= session('level') ?></h2>
        </div>
        <div class="justify-content-end m-5">
            <a href="/logout">
                <button class="btn btn-warning btn-lg">Keluar</button>
            </a>
        </div>
    </div>
    <div class="d-flex flex-column m-5 align-content-center">
        <h1 class="title mx-auto">Berapa Level Literasimu</h1>
        <div class="mx-auto d-flex flex-row justify-content-center mt-5">
            <a href="/materi" class="mx-2">
                <button class="btn btn-info btn-lg">Mulai</button>
            </a>
            <a href="/belajar" class="mx-2">
                <button class="btn btn-info btn-lg">Belajar</button>
            </a>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>