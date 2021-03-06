<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Model_Barang extends CI_Model {
 
//public function all() berfungsi untuk mengambil record yang ada di table products hingga kemudian untuk ditampilkan di folder views dengan nama file Products.php.
	public function all(){
		//query semua record di table products
		$hasil = $this->db->get('Barang');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}
	
//public function find(id) digunakan untuk mencari record berdasarkan field id yang ada di table products.
	public function find($id){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id', $id)
						  ->limit(1)
						  ->get('Barang');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}

	public function create($data_products)
	{
		// Query INSERT INTO
		$this->db->insert('Barang',$data_products);
	}

	public function update($id,$data_products)
	{
		$this->db->where('id',$id)->update('Barang',$data_products);
	}
	
	public function delete($id)
	{
		$this->db->where('id',$id)
		         ->delete('Barang');
	}
}