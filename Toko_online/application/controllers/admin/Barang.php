<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Barang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		
		$this->load->model('model_barang');
	}

	public function index()
	{
		$data['Barang'] = $this->model_barang->all();
		$this->load->view('backend/view_all_product', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('nama', 'Product Name', 'required');
        $this->form_validation->set_rules('description', 'Product Description', 'required');
        $this->form_validation->set_rules('price', 'Product Price', 'required|numeric');
        $this->form_validation->set_rules('stock', 'Available Stock', 'required|numeric');
        
        if ($this->form_validation->run() == FALSE) {
        	$this->load->view('backend/form_tambah_product');
        }else{
        	$config['upload_path'] = './uploads/';
        	$config['allowed_types'] = 'jpg|png';
        	$config['max_size'] = '300';
        	$config['max_width'] = '2000';
        	$config['max_height'] = '2000';
        	$this->load->library('upload',$config);
        	if ( ! $this->upload->do_upload()) {
        		
        		$this->load->view('backend/form_tambah_product');
        	}else{
        		
        		$gambar=$this->upload->data();
        		$data_product=array(
        		'nama'=>set_value('nama'),
        		'description'=>set_value('description'),
        		'price'=>set_value('price'),
        		'stock'=>set_value('stock'),
        		'image'=>$gambar['file_name']
        	);
        	$this->model_barang->create($data_product);
            redirect('admin/Barang/');
        }

    }
}

	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Product Name', 'required');
        $this->form_validation->set_rules('description', 'Product Description', 'required');
        $this->form_validation->set_rules('price', 'Product Price', 'required|numeric');
        $this->form_validation->set_rules('stock', 'Available Stock', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
        	$data['Barang'] = $this->model_barang->find($id);
        	$this->load->view('backend/edit_barang', $data);
        }else{
        	
        	$config['upload_path'] = './uploads/';
        	$config['allowed_types'] = 'jpg|png';
        	$config['max_size'] = '300';
        	$config['max_width'] = '2000';
        	$config['max_height'] = '2000';
        	$this->load->library('upload',$config);
        	if ( ! $this->upload->do_upload()) {
        		$data['Barang'] = $this->model_barang->find($id);
        		$this->load->view('backend/edit_barang', $data);
        	}else{
        		$gambar=$this->upload->data();
        		$data_product = array(
        		'nama'       =>set_value('nama'),
        		'description'=>set_value('description'),
        		'price'      =>set_value('price'),
        		'stock'      =>set_value('stock'),
        		'image'      =>$gambar['file_name']
        	);
        		$this->model_barang->update($id, $data_product);
        		redirect('admin/Barang');
        	}
      
        	$gambar=$this->upload->data();
        	$data_product = array(
        		'nama'       =>set_value('nama'),
        		'description'=>set_value('description'),
        		'price'      =>set_value('price'),
        		'stock'      =>set_value('stock'),
        		'image'      =>$gambar['file_name']
        	);
        	$this->model_barang->update($id, $data_product);
        	redirect('admin/Barang');
        }
	}

public function delete($id)
	{
		$this->model_barang->delete($id);
		redirect('admin/Barang'); 
	}
}