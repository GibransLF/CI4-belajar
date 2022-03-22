<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
    <form action="siswa/save" method="POST">
        <?= csrf_field(); ?>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="rext" class="form-control" id="nama" name="nama">
        <label for="kelas" class="form-label">kelas</label>
        <input type="rext" class="form-control" id="kelas" name="kelas">
        <label for="tgl_lahir" class="form-label">tgl Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
    </div>
    
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
</form>
      </div>
    </div>
  </div>
</div>