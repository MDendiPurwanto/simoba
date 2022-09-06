<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_Sensor extends CI_Model
	{
		public function getDataSensor(){
			$this->db->select('*');
			$this->db->from('tb_sensor');
			$this->db->order_by('id', 'desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function getDataSensorLast(){
			$this->db->select('*');
			$this->db->from('tb_sensor');
			$this->db->order_by('id', 'desc');
			$query = $this->db->get();
			return $query->row();
		}

		public function EditDataSensor($DataInsert)
		{
			$this->db->insert('tb_sensor',$DataInsert);
		}

		function ambildata(){
			$this->db->select('*');
			$this->db->from('tb_user');
			$query = $this->db->get();
			return $query->row();
		}
		function input_data($data){
			$this->db->insert('tb_user',$data);
		}

		function getDataUser()
		{
			$query = $this->db->get('tb_user');
			return $query->result();
		}

		function deleteUser($id) {
			$this->db->where('id', $id);
			$this->db->delete('tb_user');
		}

		function getDataUserDetail($id) {
			$this->db->where('id', $id);
			$query = $this->db->get('tb_user');
			return $query->row();
		}

		function updateDataUser($id, $data) {
			$this->db->where('id', $id);
			$this->db->update('tb_user', $data);
		}
	
	}


?>