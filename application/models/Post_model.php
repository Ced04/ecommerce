<?php
	/**
	* 
	*/
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($id = FALSE){
			if ($id === FALSE) {
				$this->db->order_by('id', 'DESC');
				$query = $this->db->get('product_tbl');
				return $query->result_array();
			}

			$query = $this->db->get_where('product_tbl', array('id' => $id));
			return $query->row_array();
		}

		public function create_post(){

			$product_id = $_POST['product_id'];
			$product_name = $_POST['product_name'];
			$item = $_POST['item'];
			$price = $_POST['product_price'];

			$this->db->query("INSERT INTO product_tbl VALUES(NOT NULL,'$product_id','$product_name', '$item', '$price', 'good')");
		}

		public function delete_post($id){
			$this->db->where('id', $id);
			$this->db->delete('product_tbl');
			return true;
		}

		public function update_post(){
			$id = url_title($this->input->post('id'));

			$data = array(
				'product_id' => $this->input->post('product_id'),
				'product_name' => $this->input->post('product_name'),
				'items' => $this->input->post('item'),
				'price' => $this->input->post('product_price')
			);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('product_tbl', $data);
		}
	}
?>