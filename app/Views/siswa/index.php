<?=$this->extend('template/template')?>
<?=$this->section('content')?>
    <h1>Siswa</h1>

    
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
      Tambah Siswa
    </button>
    
    <!-- flashdata -->
    <?= $this -> include('template/flashdata') ?>

  <?= $this->include('siswa/add') ?>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Tgl Lahir</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $i = 1 ?>
      <?php foreach($siswa as $row) : ?>
    <tr>
      <th scope="row"><?= $i++?></th>
      <td><?= $row['nama'] ?></td>
      <td><?= $row['kelas'] ?></td>
      <td><?= $row['tgl_lahir'] ?></td>
      <td>
          <a href="siswa-edit/<?= $row['id']?>" type="button" class="btn btn-warning">Edit</a>
          
          <!-- button delete -->
        <form action="siswa-delete/<?= $row['id']?>" method="POST" class="d-inline">
        <?= csrf_field() ?>
          <input type="hidden" name="_method" value="delete">
          <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</button>
        </form>
          <!-- <a href="siswa-delete/<?= $row['id']?>" class="btn btn-danger">Delete</a> -->
    </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?=$this->Endsection() ?>