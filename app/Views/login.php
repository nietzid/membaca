<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membaca - Login</title>
    <link rel="stylesheet" href="/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class=" mx-auto rounded" style="max-width: 60vh">
        <div class="card border-0 shadow m-5 align-self-center">
            <h1 class="title text-center mt-5">Yuk Masuk!</h1>
            <div class="card-body px-5 pb-5 flex row align-items-center flex justify-content-center">
                <form action="<?= base_url('login'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="d-flex row justify-content-center mx-2">
                        <div class="mb-3 px-0">
                            <label for="username" class="form-label fs-5">Nama</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Nama Kamu">
                        </div>
                        <div class="mb-3 px-0">
                            <label for="kelas" class="form-label fs-5">Kelas</label>
                            <select class="form-select" id="kelas" name="kelas">
                                <option value="1">Kelas 1</option>
                                <option value="2">Kelas 2</option>
                                <option value="3">Kelas 3</option>
                                <option value="4">Kelas 4</option>
                                <option value="5">Kelas 5</option>
                                <option value="6">Kelas 6</option>
                                <option value="7">Guru</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>