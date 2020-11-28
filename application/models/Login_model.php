<?php 
    class Login_model extends CI_Model {
        
        function getStudent($data){

            return $this->db->query("SELECT * FROM students WHERE student_mail=".$this->db->escape($data['mail'])." AND student_password='".$data['password']."'LIMIT 1")->row_array(0,"array");
        }
        function getStudents(){

            return $this->db->query("SELECT * FROM students")->result_array();
        }

        function addStudent($data){

            $this->db->query("INSERT INTO students SET student_name='".$data['name']."' , student_password='".$data['password']."', student_mail='".$data['mail']."'");
        }

        function getTeacher($data){

            return $this->db->query("SELECT * FROM teachers WHERE teacher_mail=".$this->db->escape($data['mail'])." AND teacher_password='".$data['password']."'LIMIT 1")->row_array(0,"array");
        }
        function getTeachers(){

            return $this->db->query("SELECT * FROM teachers")->result_array();
        }

        function addTeacher($data){

            $this->db->query("INSERT INTO teachers SET teacher_name='".$data['name']."' , teacher_password='".$data['password']."', teacher_mail='".$data['mail']."'");
        }


    }
?>
