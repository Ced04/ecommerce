<?php
	/**
	* 
	*/
	class Posts extends CI_Controller{
		public function index(){			
			$data['title'] = 'Product List';

			$data['posts'] = $this->post_model->get_posts();
			

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($id = NULL){
			$data['post'] = $this->post_model->get_posts($id);
  
			if (empty($data['post'])) {
				show_404();
			}

			$data['title'] = $data['post']['title'];

			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}


		public function create(){
			$data['title'] = 'Add New Product';

			$this->form_validation->set_rules('product_id', 'Product ID', 'required');
			$this->form_validation->set_rules('product_name', 'Product Name', 'required');
			$this->form_validation->set_rules('item', 'Item', 'required');
			$this->form_validation->set_rules('product_price', 'Product Price', 'required');


			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('posts/create', $data);
				$this->load->view('templates/footer');
			}else{
				$this->post_model->create_post();
				redirect('posts');
			}
		}

		public function delete($id){
			$this->post_model->delete_post($id);
			redirect('posts');
		}

		public function edit($id){
			$data['post'] = $this->post_model->get_posts($id);
  
			if (empty($data['post'])) {
				show_404();
			}

			$data['title'] = 'Edit Product';

			$this->load->view('templates/header');
			$this->load->view('posts/edit', $data);
			$this->load->view('templates/footer');
		}

		public function update(){
			$this->post_model->update_post();
			redirect('posts');
		}
	}
?>