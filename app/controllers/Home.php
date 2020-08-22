<?php

class Home extends Controller
{
  public function index()
  {
    $data['judul'] = 'Home | Arkademy';
    // $data['nama'] = $this->model('User_model')->getUser();
    $this->view('templates/header', $data);
    $this->view('home', $data);
    $this->view('templates/footer', $data);
  }
}