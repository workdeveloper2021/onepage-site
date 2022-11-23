<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Webcontroller extends CI_Controller 
{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Homemodel','HM');
    }
    
    public function index(){
        $data['banner'] =$this->HM->fetch_row_array('banner',array('active_status'=>1),'*');
        $this->load->view('index.php',$data);
    }
    
}

?>