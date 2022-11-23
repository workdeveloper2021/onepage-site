<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Webcontroller extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Homemodel','HM');
        
    }
    
    public function index(){
       $this->load->view('');
    }
    
}

?>