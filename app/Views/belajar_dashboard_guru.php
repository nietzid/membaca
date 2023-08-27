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
                            <th scope="row"><?= $key + 1 ?></th>
                            <td><?=$b['judul']?></td>
                            <td><?= $b['hikmah'] ?></td>
                            <td>
                                <?php if ($b['reaction'] != null) : ?>
                                    <?= $b['reaction'] ?>
                                <?php else : ?>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reactionModal" data-bs-id="<?= $b['belajar_id'] ?>"> Beri Reaction</button>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($b['komentar'] != null) : ?>
                                    <?= $b['komentar'] ?>
                                <?php else : ?>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#komentarModal" data-bs-id="<?= $b['belajar_id'] ?>"> Beri Komentar</button>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="reactionModal" tabindex="-1" aria-labelledby="reactionModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Beri Reaction</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('save-reaction'); ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="modal-body">
                            <input type="hidden" name="id">
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Reaction:</label>
                                <select class="form-select" aria-label="reaction" id="reaction" name="reaction" >
                                    <option selected>Klik untuk memilih</option>
                                    <option value="Keren">Keren</option>
                                    <option value="Mantap">Mantap</option>
                                    <option value="Amazing">Amazing</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="komentarModal" tabindex="-1" aria-labelledby="komentarModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Beri Komentar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('save-komentar'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <input type="hidden" name="id">
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Komentar:</label>
                            <textarea class="form-control" id="komentar" name="komentar"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
        const komentarModal = document.getElementById('komentarModal')
        komentarModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget
            const recipient = button.getAttribute('data-bs-id')
            const modalBodyInput = exampleModal.querySelector('.modal-body input')
            console.log(recipient)
            modalBodyInput.value = recipient
        })
        const reactionModal = document.getElementById('reactionModal')
        komentarModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget
            const recipient = button.getAttribute('data-bs-id')
            const modalBodyInput = exampleModal.querySelector('.modal-body input')
            modalBodyInput.value = recipient
        })
    </script>
</body>

</html>