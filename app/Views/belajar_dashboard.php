<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membaca - Belajar</title>
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
            <a href="/dashboard">
                <button class="btn btn-warning btn-lg">Dashboard</button>
            </a>
        </div>
    </div>
    <div class="w-75 mx-auto">
        <div class="justify-content-between my-4 d-flex flex-col">
            <h1 class="text-white">Materi yang sudah dipelajari</h1>
            <a href="/belajar/baru">
                <button class="btn btn-info btn-lg">Belajar Lagi</button>
            </a>
        </div>
        <div class="rounded p-4 card">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Pelajaran yang Diambil</th>
                        <th scope="col">Reaction Guru</th>
                        <th scope="col">Komentar Guru</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($belajar as $key => $b) : ?>
                    <tr>
                        <th scope="row"><?=$key+1?></th>
                        <td>Mark</td>
                        <td><?=$b['hikmah']?></td>
                        <td><?=$b['reaction']?></td>
                        <td><?=$b['komentar']?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>