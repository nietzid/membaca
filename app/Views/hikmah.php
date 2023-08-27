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
            <h1 class="text-white">Yuk isi pertanyaan berikut!</h1>
        </div>
    </div>
    <div class="d-flex flex-column align-content-center">
        <form action="<?= base_url('/belajar/hikmah'); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="card w-75 mx-auto flex justify-items-center rounded">
                <h1 class="text-gray mx-auto m-5">Pelajaran apa yang dapat kamu ambil dari cerita tersebut?</h1>
                <div class="form-group">
                    <textarea class="form-control mx-auto w-75" id="jawaban" name="jawaban" rows="3" placeholder="Jawab disini ya!" required></textarea>
                </div>
                <div class="d-flex flex- justify-content-end m-5">
                    <button type="submit" class="btn btn-warning btn-lg">Lanjut</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>