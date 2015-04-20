<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quotes extends CI_Controller {
  public function index()
  {
    $this->load->model('Quote');
    $data['hello'] = $this->Welcome->hello();
    $this->load->view('index', $data);
  }
}

//end of main controller
