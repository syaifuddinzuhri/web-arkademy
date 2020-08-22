<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <div class="row">
        <div class="col-8">
          <h3>Detail Produk</h3>
        </div>
        <div class="col-4 text-right">
          <a href="<?= BASEURL; ?>/product" class="btn btn-outline-primary btn-sm">Kembali</a>
        </div>
      </div>
      <ul class="list-group">
        <li class="list-group-item">Nama Produk : <strong><?= $data['produk']['nama_produk']; ?></strong></li>
        <li class="list-group-item">Harga :
          <strong>Rp <?= number_format($data['produk']['harga'], 2, ',', '.');  ?></strong></li>
        <li class="list-group-item">Jumlah : <strong><?= $data['produk']['jumlah']; ?> buah</strong></li>
        <li class="list-group-item">Keterangan : <strong><?= $data['produk']['keterangan']; ?></strong></li>
      </ul>
    </div>
  </div>
</div>

</div>


<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/product/addProduct" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="produk"></label>
            <input type="text" class="form-control" id="produk" name="produk" autocomplete="off" required
              placeholder="Masukkan nama produk...">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="harga"></label>
              <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga produk..."
                required>
            </div>
            <div class="form-group col-md-6">
              <label for="jumlah"></label>
              <input type="number" class="form-control" id="jumlah" name="jumlah"
                placeholder="Masukkan jumlah produk..." required>
            </div>
          </div>
          <div class="form-group">
            <label for="keterangan"></label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required
              placeholder="Masukkan keterangan produk..."></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Produk</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->

<!-- Modal Delete -->
<div class="modal fade" id="modalDelete2" tabindex="-1" aria-labelledby="modalDelete2Label" aria-hidden="true">
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