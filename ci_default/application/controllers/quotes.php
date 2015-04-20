<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quotes extends CI_Controller {
  public function index()
  {
    $this->load->model('Quote');
    $this->load->view('index');
  }

  public function index_json()
  {
  	$this->load->model('Quote');
  	$data['quotes'] = $this->Quote->all();
  	echo json_encode($data);
  }
}

//end of main controller
