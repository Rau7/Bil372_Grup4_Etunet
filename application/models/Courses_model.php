<?php 
    class Courses_model extends CI_Model {
        
        function getCoursesOfTeacherWithId($data){

            return $this->db->query("SELECT course_id FROM given_courses WHERE teacher_id=".$this->db->escape($data)." ")->result_array();
        }

    }
?>