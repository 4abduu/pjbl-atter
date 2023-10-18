<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-4 ">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Siswa
        </button>
        </div>
    </div>

    <div class="row mb-4 ">
        <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/siswa/cari" method="post">
      <div class="input-group">
      <input type="text" class="form-control" placeholder="Cari data siswa..." name="keyword" id="keyword" autocomplete="off">
      <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
      </div>
        </form>
        </div>
    </div>

<div class="row">
    <div class="col-lg-6">
        <h3>Daftar Siswa</h3>

        <ul class="list-group">
            <?php foreach ($data['siswa'] as $siswa): ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <?= $siswa['nama'] ?>
                    <div class="badge">
                    <a href = "<?= BASEURL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="badge text-bg-primary"> Detail</a>
                    <a href = "<?= BASEURL; ?>/siswa/ubah/<?= $siswa['id']; ?>" class="badge text-bg-warning tampilModalEdit" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $siswa['id']; ?>"> Edit</a>
                    <a href = "<?= BASEURL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin ingin menghapus?');"> Hapus</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
        </div>

        <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan nis">
        </div>

        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
        </div>

        <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
        <option selected>--Pilih Jurusan--</option>
        <option value="Teknik Grafika">Teknik Grafika</option>
        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
        <option value="Animasi">Animasi</option>
        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
        <option value="Logistik">Logistik</option>
        <option value="Mekatronika">Mekatronika</option>
        <option value="Perhotelan">Perhotelan</option>
        </select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>