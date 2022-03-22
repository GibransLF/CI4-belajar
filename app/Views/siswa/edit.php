<?= $this -> extend('/template/template') ?>

<?= $this -> section('content') ?>
        
    <form action="/siswa-update/<?= $siswa['id'] ?>" method="POST">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="rext" class="form-control" id="nama" name="nama" value="<?= $siswa['nama'] ?>" placeholder="<?= $siswa['nama'] ?>">
            <label for="kelas" class="form-label">kelas</label>
            <input type="rext" class="form-control" id="kelas" name="kelas" value="<?= $siswa['kelas'] ?>" placeholder="<?= $siswa['kelas'] ?>">
            <label for="tgl_lahir" class="form-label">tgl Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $siswa['tgl_lahir'] ?>" placeholder="<?= $siswa['tgl_lahir'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">
            Ubah Data
        </button>
    </form>
<?= $this -> Endsection() ?>
