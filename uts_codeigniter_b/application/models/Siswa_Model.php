<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getDataSiswa()
		{
			$this->db->select("id,nama,DATE_FORMAT(tanggal_lahir,'%d-%m-%Y') as tanggal_lahir,foto,fk_kelas");
			$query = $this->db->get('siswa');
			return $query->result();
		}

		public function getDataSiswaId($id)
		{
			$this->db->select("siswa.id,siswa.nama,DATE_FORMAT(tanggal_lahir,'%d-%m-%Y') as tanggal_lahir,foto,fk_kelas,kelas.nama as kelas,kelas.id as idkelas");
			$this->db->where('fk_kelas', $id);
			$this->db->join('kelas', 'kelas.id = siswa.fk_kelas', 'left');
			$query = $this->db->get('siswa');
			return $query->result();
		}

		public function getDataSiswaById($id)
		{
			$this->db->where('id',$id);
			$query = $this->db->get('siswa');			
			return $query->result();
		}

		public function getKelasBySiswa($idSiswa)
		{
			$this->db->select("siswa.nama, kelas.nama as namaKelas, kelas.id, siswa.fk_kelas, siswa.tanggal_lahir");
			$this->db->where('fk_kelas', $idSiswa);	
			$this->db->join('kelas', 'kelas.id = siswa.fk_kelas', 'left');	
			$query = $this->db->get('kelas');
			return $query->result();
		}
		
		public function insertSiswa($idSiswa)
		{
			$object = array(
				'nama' => $this->input->post('nama'),
				'id' => $this->input->post('id'),
			    'tanggal_lahir' => $this->input->post('tanggal_lahir') ,			    
			    'foto' => $this->upload->data('file_name'), 
			    'fk_kelas' => $this->input->post('fk_kelas'),
			    );
			$this->db->insert('siswa',$object); 


		}


		public function getSiswa($id)
		{
			$this->db->where('id', $id);	
			$query = $this->db->get('siswa',1);
			return $query->result();

		}

		public function updateById($id)
		{
			$data = array(
				'nama' => $this->input->post('nama'),
				
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),				
				'foto' => $this->upload->data('file_name'), 
				);
			$this->db->where('id', $id);
			$this->db->update('siswa', $data);
		}

		public function deleteById($id) 
		{
			$this->db->where('id',$id);
			$this->db->delete('siswa');
		}

		//kategori
		public function insertKelas()
		{
			$object = array(
				'nama' => $this->input->post('nama') 
				);
			$this->db->insert('kelas', $object);
		}
		public function getDataKelas()
		{
			$this->db->select("*");
			$query = $this->db->get('kelas');
			return $query->result();
		}
		public function getDataKelasById($id)
		{
			$this->db->where('id',$id);
			$query = $this->db->get('kelas');
			return $query->result();
		}
		public function updateKelasById($id)
		{
			$data = array(
				'nama' => $this->input->post('nama')				
				);
			$this->db->where('id', $id);
			$this->db->update('kelas', $data);
		}
		public function deleteKelasById($id) 
		{
			$this->db->where('id',$id);
			$this->db->delete('kelas');
		}
}

/* End of file siswa_Model.php */
/* Location: ./application/models/siswa_Model.php */
 ?>