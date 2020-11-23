<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Courses extends CI_Controller {

	

	public function index()
	{	
			if(isset($this->session->userdata['admin']['admin_id'])){

				$this->load->model("Courses_model");
	    
	    		if($this->session->userdata['admin']['type'] === "teacher"){
					$data['courses'] = $this->Courses_model->getCoursesOfTeacherWithId($this->session->userdata['admin']['admin_id']);

					if(empty($data['courses'])){
						$data['subview'] = "empty_teacher_courses";
					}
					else{
						$data['subview'] = "courses_teacher";
					}

					
					$data["title"]= "Profil";
				
					$this->load->view('layouts/standart',$data);

				}
				else{
					
				}
				
		   }
		    else{
		      redirect('http://localhost/bookstore/index.php/Login','refresh');
		    }
	    	

	}

	public function add_course(){
	  $data['title'] = "Add Course";
	  $data['subview'] = "add_course";
	  $this->load->view('layouts/standart',$data);

	}

	public function real_add_course(){

		if(isset($this->session->userdata['admin']['admin_id'])){


			print_r($this->input->post());
			die();

			$data['title'] = "Add Course";
	  		$data['subview'] = "add_course";
	  		$this->load->view('layouts/standart',$data);
		}
		else{
			redirect('http://localhost/bookstore/index.php/Login','refresh');
		}
	  

	}


}

?>

