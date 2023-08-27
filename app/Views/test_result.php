<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membaca - Test</title>
    <link rel="stylesheet" href="/css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex flex-row justify-content-between">
        <div class="d-flex flex-column row m-5">
            <h1 class="text-white">Penjelasan!</h1>
        </div>
    </div>
    <div class="d-flex flex-column align-content-center">
        <div class="card w-75 mx-auto flex justify-items-center rounded">
            <?php $tests = session()->get('testData'); ?>
            <?php foreach ($tests as $test) : ?>
                <h1 class="text-gray mx-auto m-5"><?= $test['soal'] ?></h1>
                <div>
                    <h3 class="text-gray mx-auto m-5 w-75">Jawaban benar: <?= $test['jawaban'] ?></h1>
                </div>
            <?php endforeach; ?>

            <div class="d-flex flex- justify-content-end m-5">
                <a href="/materi">
                    <button type="submit" class="btn btn-warning btn-lg">Lanjut</button>
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>