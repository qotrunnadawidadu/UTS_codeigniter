<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function index()
	{
		$this->load->model('siswa_model');		
		$data["kelas"] = $this->siswa_model->getDataKelas();
		$this->load->view('kelas', $data);
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('siswa_model');
		if ($this->form_validation->run() == FALSE) {
			 $this->load->view('tambah_kelas_view');

		} else {
			$this->siswa_model->insertKelas();						
			$data["kelas"] = $this->siswa_model->getDataKelas();
			$this->load->view('kelas',$data);
		}
	}

	public function update($idKelas)
	{
		
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		//sebelum update data harus ambil data lama yang akan di update
		$this->load->model('siswa_model');
		$data['kelas']=$this->siswa_model->getDataKelasById($idKelas);
		//skeleton code
		if($this->form_validation->run()==FALSE){

		

			$this->load->view('edit_kelas_view',$data);

		} else{			
			$this->siswa_model->updateKelasById($idKelas);
			$data["kelas"] = $this->siswa_model->getDataKelas();
			$this->load->view('kelas',$data);
		}		
	}

	public function delete($id)
 	{ 
 	 	$this->load->model('siswa_model');
  		$this->siswa_model->deleteKelasById($id);
 	 	redirect('kelas');
	 }

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>