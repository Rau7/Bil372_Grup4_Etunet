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
		      redirect('http://localhost/Bil372_Grup4_Etunet/index.php/Enterence','refresh');
		    }
	    	

	}

	public function add_course(){
	  $data['title'] = "Add Course";
	  $data['subview'] = "add_course";
	  $this->load->view('layouts/standart',$data);

	}

	public function real_add_course(){

		if(isset($this->session->userdata['admin']['admin_id'])){

			$this->load->model("Courses_model");

			$this->Courses_model->addCourse($this->input->post(),$this->session->userdata['admin']['admin_id']);

			redirect('http://localhost/Bil372_Grup4_Etunet/index.php/Courses','refresh');
		}
		else{
			redirect('http://localhost/Bil372_Grup4_Etunet/index.php/Enterence','refresh');
		}
	  

	}


}

?>

