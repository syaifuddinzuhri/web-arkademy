<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?= BASEURL; ?>/img/logo.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title><?= $data['judul']; ?></title>
  </head>
  <style>
  body {
    overflow-x: hidden;
  }
  </style>

  <body>
    <?php
  $uri_segment = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
  ?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?= BASEURL; ?>/img/logo.png" width="100" alt="" loading="lazy">
        </a>
        <!-- Button Toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- End Button Toggle -->
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item <?= ($uri_segment[3] == '') ? 'active' : '' ?>">
              <a class="nav-link" href="<?= BASEURL ?>">
                <h5>Home</h5>
              </a>
            </li>
            <li class="nav-item <?= ($uri_segment[3] == 'product') ? 'active' : '' ?>">
              <a class="nav-link" href="<?= BASEURL; ?>/product">
                <h5>Produk</h5>
              </a>
            </li>
            </li>
          </ul>
          <!-- End Navbar Collapse -->
        </div>
      </div>
    </nav>
    <!-- End Navbar -->