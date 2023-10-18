<div class="container mt-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Nama : <?= $data['siswa']['nama']; ?></h5>
    <br>
    <p class="card-text">NIS : <?= $data['siswa']['nis']; ?></p>
    <p class="card-text">Email : <?= $data['siswa']['email']; ?></p>
    <p class="card-text">Jurusan : <?= $data['siswa']['jurusan']; ?></p>
    <a href="<?= BASEURL; ?>/siswa" class="card-link">Kembali</a>
  </div>
</div>
</div>