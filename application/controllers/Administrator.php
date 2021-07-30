<?php
    class Administrator extends CI_Controller{
        public function view($page = 'index'){
            if (!file_exists(APPPATH.'views/administrator/'.$page.'.php')) {
				show_404();
			}
           $data['title'] = ucfirst($page);
           $this->load->view('administrator/header');
			$this->load->view('administrator/'.$page, $data);
			$this->load->view('administrator/footer');
        }
    }