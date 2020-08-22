<?php

class Product extends Controller
{
  public function index()
  {
    $data['judul'] = 'Produk | Arkademy';
    $data['product'] = $this->model('Product_model')->getAllProducts();
    $this->view('templates/header', $data);
    $this->view('product', $data);
    $this->view('templates/footer', $data);
  }

  public function detailProduct($id)
  {
    $data['produk'] = $this->model('Product_model')->getSingleProductById($id);
    $data['judul'] = $data['produk']['nama_produk'] . ' | Arkademy';
    if (isset($id)) {
      $this->view('templates/header', $data);
      $this->view('detail', $data);
      $this->view('templates/footer', $data);
    } else {
      Flasher::setFlash('Produk baru', 'berhasil', 'ditambahkan', 'success');
      $this->view('templates/header', $data);
      $this->view('detail', $data);
      $this->view('templates/footer', $data);
    }
  }

  public function getSingleProductJSON()
  {
    $singleProduct = $this->model('Product_model')->getSingleProductById($_POST['id']);
    echo json_encode($singleProduct);
  }

  public function addProduct()
  {
    $nama = htmlspecialchars($_POST['produk']);
    $harga = htmlspecialchars($_POST['harga']);
    $jumlah = htmlspecialchars($_POST['jumlah']);
    $keterangan = htmlspecialchars($_POST['keterangan']);

    if (isset($_POST['submit'])) {
      if ($nama == NULL) {
        Flasher::setFlash('Nama produk ', 'harus', 'diisi', 'danger');
        header('Location: ' . BASEURL . '/product');
        exit;
      } else if ($harga == NULL) {
        Flasher::setFlash('Harga ', 'harus', 'diisi', 'danger');
        header('Location: ' . BASEURL . '/product');
        exit;
      } else if ($jumlah == NULL) {
        Flasher::setFlash('Jumlah ', 'harus', 'diisi', 'danger');
        header('Location: ' . BASEURL . '/product');
        exit;
      } else if ($keterangan == NULL) {
        Flasher::setFlash('Keterangan ', 'harus', 'diisi', 'danger');
        header('Location: ' . BASEURL . '/product');
        exit;
      }
      $singleProduct = $this->model('Product_model')->getSingleProduct($_POST['produk']);
      if ($singleProduct == NULL) {
        $this->model('Product_model')->addProduct($_POST);
        Flasher::setFlash('Produk baru', 'berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/product');
        exit;
      } else {
        Flasher::setFlash('Produk ', 'sudah ada!', '', 'danger');
        header('Location: ' . BASEURL . '/product');
        exit;
      }
    }
  }

  public function updateProduct()
  {
    $this->model('Product_model')->updateProduct($_POST);
    Flasher::setFlash('Produk ', 'berhasil', 'diubah', 'success');
    header('Location: ' . BASEURL . '/product');
    exit;
  }

  public function deleteProduct($id)
  {
    $this->model('Product_model')->deleteProduct($id);
    Flasher::setFlash('Produk baru', 'berhasil', 'dihapus', 'success');
    header('Location: ' . BASEURL . '/product');
    exit;
  }
}