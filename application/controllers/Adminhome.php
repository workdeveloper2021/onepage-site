<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Adminhome extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();
        $this->load->model('Homemodel','HM');
         $this->load->helper(array('form', 'url'));   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function banner()
    {
        $this->global['pageTitle'] = 'CodeInsect : Dashboard';
        $data['banner'] = $this->HM->fetch_row_array('banner',array('active_status'=>1),'*');
        $this->loadViews("admin/banner/index",$data);
    }
    public function update(){
		$post = $this->input->post();
		$id = $post['id'];
	        if($_FILES["image"]["size"] > 0 ){  
	            $image = '';
	            $tmpFilePath = $_FILES['image']['tmp_name'];
	            $image_file_type = pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
	            $newFilePath = 'assets/uploads/banner/'.time().'.'.$image_file_type;
	            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
	             $post['image'] = $newFilePath;  
	            }
	        }
			
			$result = $this->HM->update('banner',array('id'=>$id),$post);
			if($result){
				
				$this->session->set_flashdata('up_success','Banner Updated Successfully');
				redirect('Adminhome/banner');
			}
			else{
				
				$this->session->set_flashdata('fail','Banner Not Added');
				redirect('Adminhome/banner');
			}
		
	}
}

?>