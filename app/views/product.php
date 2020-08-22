<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>


  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary btnAddProduct" data-toggle="modal" data-target="#formModal">
        Tambah Produk
      </button>

    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <h3>Daftar Produk</h3>
      <ul class="list-group">
        <?php

        if ($data['product'] != NULL) {
          foreach ($data['product'] as $p) : ?>
        <li class="list-group-item">
          <?= $p['nama_produk']; ?>
          <a href="<?= BASEURL; ?>/product/deleteProduct/<?= $p['id']; ?>"
            class="badge badge-danger float-right mr-1 ml-1 btnModalDelete" data-toggle="modal"
            data-target="#modalDelete" data-id="<?= $p['id']; ?>">hapus</a>
          <a href=" <?= BASEURL; ?>/product/updateProduct/<?= $p['id']; ?>"
            class="badge badge-success float-right mr-1 ml-1 modalUpdate" data-toggle="modal" data-target="#formModal"
            data-id="<?= $p['id']; ?>">ubah</a>
          <a href="<?= BASEURL; ?>/product/detailProduct/<?= $p['id']; ?>"
            class="badge badge-primary float-right mr-1 ml-1">detail</a>
        </li>
        <?php endforeach; ?>
      </ul>
      <?php } else { ?>
      <div class="alert alert-danger" role="alert">
        Produk kosong!
      </div>
      <?php } ?>
    </div>
  </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Produk Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/product/addProduct" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="produk">Nama Produk</label>
            <input type="text" class="form-control" id="produk" name="produk" autocomplete="off"
              placeholder="Masukkan nama produk...">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="harga">Harga</label>
              <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga produk...">
            </div>
            <div class="form-group col-md-6">
              <label for="jumlah">Jumlah</label>
              <input type="number" class="form-control" id="jumlah" name="jumlah"
                placeholder="Masukkan jumlah produk...">
            </div>
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"
              placeholder="Masukkan keterangan produk..."></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Tambah Produk</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->

<!-- Modal Delete -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Apakah Anda yakin mau menghapus produk?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>pilih "Hapus" jika anda mau menghapus produk <strong class="np"></strong></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="" class="btn btn-danger btnDelete">Hapus</a>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Delete -->