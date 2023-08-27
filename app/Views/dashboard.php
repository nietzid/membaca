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
    <div class="d-flex flex-coloum justify-content-between">
        <div class="d-flex flex-column m-5">
            <h1 class="text-white">Hi <?= session('nama') ?>!</h1>
            <h2 class="text-white">Selamat, saat ini kamu level <?= session('level') ?>
                <span>
                    <?php if (session('status') == 0) : ?>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" width="50" height="50">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181" />
                        </svg>
                    <?php elseif (session('status') == 1) : ?>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="50" height="50">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                        </svg>
                    <?php endif; ?>
                </span>
            </h2>
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