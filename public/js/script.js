$(function () {
  $(".btnAddProduct").on("click", function () {
    $("#formModalLabel").html("Tambah produk baru");
    $(".modal-footer button[type=submit]").html("Tambah");
    $(".modal-body form").attr(
      "action",
      "http://localhost/web-arkademy/public/product/addProduct"
    );
    $("#id").val("");
    $("#produk").val("");
    $("#harga").val("");
    $("#jumlah").val("");
    $("#keterangan").val("");
  });

  $(".modalUpdate").on("click", function () {
    $("#formModalLabel").html("Update data produk");
    $(".modal-footer button[type=submit]").html("Simpan");
    $(".modal-body form").attr(
      "action",
      "http://localhost/web-arkademy/public/product/updateProduct"
    );
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/web-arkademy/public/product/getSingleProductJSON",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#produk").val(data.nama_produk);
        $("#harga").val(data.harga);
        $("#jumlah").val(data.jumlah);
        $("#keterangan").val(data.keterangan);
      },
    });
  });

  $(".btnModalDelete").on("click", function () {
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/web-arkademy/public/product/getSingleProductJSON",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $(".np").html(data.nama_produk);
        $(".btnDelete").attr(
          "href",
          `http://localhost/web-arkademy/public/product/deleteProduct/${data.id}`
        );
      },
    });
  });
});
