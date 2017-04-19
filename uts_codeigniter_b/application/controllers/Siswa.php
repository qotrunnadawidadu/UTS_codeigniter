<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index()
	{
		$this->load->model('siswa_model');
		$data["siswa_list"] = $this->siswa_model->getDataSiswa();
		$this->load->view('siswa',$data);	
	}

	public function create()
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'trim|required');
		$this->load->model('siswa_model');	
		if($this->form_validation->run()==FALSE){

			$this->load->view('tambah_siswa_view');

		}else{
			$config['upload_path']		= './assets/uploads/';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 10000000000;
			$config['max_width']		= 10240;
			$config['max_height']		= 7680;

			$this->load->library('upload' , $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' =>$this->upload->display_errors());
				$this->load->view('tambah_siswa_view',$error);
			}
			else {
			$this->siswa_model->insertSiswa($idSiswa);
			$data["siswa_list"] = $this->siswa_model->getDataSiswaId($idSiswa);
			redirect('siswa/index/'.$idSiswa);
			}
		}

		
	}
	
	public function update($id)
	{

		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'trim|required');
		
		$this->load->model('siswa_model');
		$data['siswa_list']=$this->siswa_model->getDataSiswaById($id);
	
		if($this->form_validation->run()==FALSE){

		

			$this->load->view('edit_siswa_view',$data);

		}else{
			$config['upload_path']		= './assets/uploads/';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 10000000000;
			$config['max_width']		= 10240;
			$config['max_height']		= 7680;

			$this->load->library('upload' , $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' =>$this->upload->display_errors());
				$this->load->view('edit_siswa_view',$error);
			}
			else {
			$this->siswa_model->updateById($id);
			$data["siswa_list"] = $this->siswa_model->getDataSiswa($id);
			$this->load->view('siswa',$data);
			}
			

		}
	}

	public function delete($id,$id_siswa)
 	{ 
 	 	$this->load->model('siswa_model');
  		$this->siswa_model->deleteById($id);
 	 	redirect('siswa/index/'.$id_siswa);
	}

	 public function datatable()
	 {
	 	$this->load->model('siswa_model');
	 	$data["siswa_list"] = $this->siswa_model->getDataSiswa();
	 	$this->load->view('siswa_datatable', $data);
	 }

	 public function datatable_ajax()
	{
		$this->load->view('siswa_datatable_ajax');	
	}

	public function data_server()
	{
        $this->load->library('Datatables');
        $this->datatables
                ->select('id,nama,tanggal_lahir,foto')
                ->from('siswa');
        echo $this->datatables->generate();
	}
	
}

/* End of file siswa.php */
/* Location: ./application/controllers/siswa.php */

 ?>