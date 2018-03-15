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

		public function get_cart($id = FALSE){
			if ($id === FALSE) {
				$this->db->order_by('id', 'DESC');
				$query = $this->db->get('cart_tbl');
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

			$product_id = $_POST['product_id'];
			$product_name = $_POST['product_name'];
			$item = $_POST['item'];
			$price = $_POST['product_price'];

			$this->db->query("UPDATE product_tbl SET product_name = '$product_name', items = '$item', price = '$price' WHERE product_id = '$product_id'");
		}

		public function add_product(){
			$id = url_title($this->input->post('id'));

			$gen = "1234567890";
			$cart_id = substr(str_shuffle($gen), 0, 7);

			$product_id = $_POST['product_id'];
			$product_name = $_POST['product_name'];
			$item = $_POST['item'];
			$items = $_POST['items'];
			$price = $_POST['product_price'];

			$total_amount = $item*$price;

			$new_item = $items-$item;


			//Add to cart
			$this->db->query("INSERT INTO cart_tbl VALUES(NOT NULL, '$cart_id', '$product_id','$product_name', '$item', '$price', '$total_amount')");

			if ($items == 0) {
				echo "Sorry item is not available";
			}else{
				$this->db->query("UPDATE product_tbl SET items = '$new_item' WHERE product_id = '$product_id'");
			}
			//Update items in product table.
			

		}
	}
?>