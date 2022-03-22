    <!-- flashdata insert -->
<?php if( session() -> getFlashdata('pesanBerhasil') ) : ?>
      <div class="alert alert-info" role="alert">
        <?= session() ->getFlashdata('pesanBerhasil', 'Data berhasil di Tambahkan!') ?>
      </div>

    <?php elseif( session() -> getFlashdata('pesanGagal') ) : ?>
      <div class="alert alert-danger" role="alert">
        <?= session() ->getFlashdata('pesanGagal', 'Data gagal di Tambahkan!') ?>
        <?= $validation -> ListErrors() ?>
      </div>

      <!-- flashdata update -->
    <?php elseif( session() -> getFlashdata('pesanUpdate') ) : ?>
      <div class="alert alert-info" role="alert">
        <?= session() ->getFlashdata('pesanUpdate','Data berhasil di Ubah!') ?>
      </div>

    <?php elseif( session() -> getFlashdata('pesanGagalUpdate') ) : ?>
      <div class="alert alert-danger" role="alert">
        <?= session() ->getFlashdata('pesanGagalUpdate','Data gagal di Ubah!') ?>
        <?= $validation -> ListErrors() ?>
      </div>

      <!-- flashdata delete -->
    <?php elseif( session() -> getFlashdata('pesanDelete') ) : ?>
      <div class="alert alert-info" role="alert">
        <?= session() ->getFlashdata('pesanDelete','Data berhasil di Hapus!') ?>
      </div>

    <?php endif; ?>