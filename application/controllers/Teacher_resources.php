<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Teacher_resources extends CI_Controller {



    public function index()
    {
        if(isset($this->session->userdata['admin']['admin_id'])){

            $this->load->model("Resources_model");

            $this->load->model("Courses_model");

            $this->load->model("Login_model");

            if($this->session->userdata['admin']['type'] === 'teacher'){

                $resources = $this->Resources_model->getResources($this->session->userdata['admin']['current_course_id']);

                $data['resources'] = $resources;
                $data['courses'] = $this->Login_model->getCoursesOfTeacher($this->session->userdata['admin']['teacher_id']);
                $data['subview'] = "resource_list";
                $data['type'] = 'teacher';

                $this->load->view('layouts/standart',$data);

            }

        }
        else{
            redirect('http://localhost/Bil372_Grup4_Etunet/index.php/Enterence','refresh');
        }


    }

    public function add_resources(){

        $this->load->model("Login_model");
        $data['courses'] = $this->Login_model->getCoursesOfTeacher($this->session->userdata['admin']['teacher_id']);
        $data['subview'] = "add_resources";
        $data['type'] = 'teacher';

        $this->load->view('layouts/standart',$data);

    }

    public function handle_resources(){

        if(isset($this->session->userdata['admin']['admin_id'])){

            $this->load->model("Resources_model");

            $resource = $this->input->post();

            $course_id = $this->session->userdata['admin']['current_course_id'];

            $this->Resources_model->addResource($resource,$course_id);

            redirect('http://localhost/Bil372_Grup4_Etunet/index.php/Teacher_resources','refresh');


        }
        else{
            redirect('http://localhost/Bil372_Grup4_Etunet/index.php/Enterence','refresh');
        }


    }

    public function update_homework($resource_id){

        $this->load->model("Homework_model");

        $resource = $this->Resources_model->getResource($resource_id);

        $data['resource'] = $resource;

        $this->load->model("Login_model");
        $data['courses'] = $this->Login_model->getCoursesOfTeacher($this->session->userdata['admin']['teacher_id']);
        $data['subview'] = "update_homework";
        $data['type'] = 'teacher';

        $this->load->view('layouts/standart',$data);

    }

    public function handle_update($resource_id){

        if(isset($this->session->userdata['admin']['admin_id'])){

            $this->load->model("Homework_model");

            $homework = $this->input->post();

            $course_id = $this->session->userdata['admin']['current_course_id'];

            $this->Homework_model->updateHomework($homework,$course_id,$hmw_id);

            redirect('http://localhost/Bil372_Grup4_Etunet/index.php/Teacher_homework','refresh');


        }
        else{
            redirect('http://localhost/Bil372_Grup4_Etunet/index.php/Enterence','refresh');
        }


    }

    public function delete_homework($hmw_id){

        if(isset($this->session->userdata['admin']['admin_id'])){

            $this->load->model("Homework_model");

            $this->Homework_model->deleteHomework($hmw_id);

            redirect('http://localhost/Bil372_Grup4_Etunet/index.php/Teacher_homework','refresh');


        }
        else{
            redirect('http://localhost/Bil372_Grup4_Etunet/index.php/Enterence','refresh');
        }


    }



}

?>