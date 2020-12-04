<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

	

	public function index()
	{	
			if(isset($this->session->userdata['admin']['admin_id'])){

				$this->load->model('Login_model');

				$this->load->model('Courses_model');

				$data['subview'] = "dashboard";

				if($this->session->userdata['admin']['type'] === 'teacher'){

					$data['courses'] = $this->Login_model->getCoursesOfTeacher($this->session->userdata['admin']['teacher_id']);
					if(empty($data['courses'])){
						redirect('http://localhost/Bil372_Grup4_Etunet/index.php/Courses','refresh');
					}
					else{
						if(isset($this->session->userdata['admin']['current_course_id'])){

							$data['current_course'] = $this->Courses_model->getCourseWithId($this->session->userdata['admin']['current_course_id'])[0];
						}
						else{
							$admin = $this->session->userdata['admin'];
							$admin['current_course_id']  = $data['courses'][0]['course_id'];
							$this->session->set_userdata('admin',$admin);
						    $data['current_course'] = $data['courses'][0];
						}
						
					}
					$data['type'] = 'teacher';
				}


	    	    $this->load->view('layouts/standart',$data);

			}
	    	else{
	      		redirect('http://localhost/Bil372_Grup4_Etunet/index.php/Enterence','refresh');
	    	}
	    	

	}

	public function set_course($course_id){
		$admin = $this->session->userdata['admin'];
		$admin['current_course_id']  = $course_id;
		$this->session->set_userdata('admin',$admin);
		redirect('http://localhost/Bil372_Grup4_Etunet/index.php/Dashboard','refresh');
	}


}

?>

