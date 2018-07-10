<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    $data['content'] = 'home';
    $this->load->view('layout/default', $data);
  }

}

/* End of file Home.php */
/* Location: ./application/wsfront/controllers/Home.php */