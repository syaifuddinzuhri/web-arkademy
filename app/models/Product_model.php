<?php

class Product_model
{
  private $table = 'produk';
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getAllProducts()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getSingleProduct($produk)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nama_produk= ?');
    $this->db->bind("s", $produk);
    return $this->db->single();
  }

  public function getSingleProductById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id= ?');
    $this->db->bind("i", $id);
    return $this->db->single();
  }

  public function addProduct($data)
  {
    $query = "INSERT INTO produk (nama_produk, keterangan, harga, jumlah) VALUES (?, ?, ?, ?)";
    $this->db->query($query);
    $param = array(
      // Type Params
      "ssii",
      // Value Params
      &$data['produk'], &$data['keterangan'], &$data['harga'], &$data['jumlah']
    );
    $this->db->bind_array($param);
    $this->db->execute();
  }

  public function updateProduct($data)
  {
    $query = "UPDATE " . $this->table . " SET nama_produk = ?,  keterangan = ?, harga = ?, jumlah = ?  WHERE id = ?";
    $this->db->query($query);
    $param = array(
      // Type Params
      "ssiii",
      // Value Params
      &$data['produk'], &$data['keterangan'], &$data['harga'], &$data['jumlah'], &$data['id']
    );
    $this->db->bind_array($param);
    $this->db->execute();
  }

  public function deleteProduct($id)
  {
    $query = 'DELETE FROM ' . $this->table . ' WHERE id = ?';
    $this->db->query($query);
    $this->db->bind('i', $id);
    $this->db->execute();
  }
}