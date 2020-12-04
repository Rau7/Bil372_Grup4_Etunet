<?php 
    class Courses_model extends CI_Model {
        
        function getCoursesOfTeacherWithId($data){

            return $this->db->query("SELECT * FROM given_courses WHERE teacher_id=".$this->db->escape($data)." ")->result_array();
        }

        function addCourse($data,$teacher_id){

            $this->db->query("INSERT INTO courses SET course_name='".$data['course_name']."' , course_description='".$data['course_description']."', course_short_desc='".$data['course_short_desc']."', course_is_active=1");

            $id = $this->db->query("SELECT course_id FROM courses WHERE course_name='".$data['course_name']."' ")->row_array(0,"array");


            $this->db->query("INSERT INTO given_courses SET course_id='".$id['course_id']."' , teacher_id=".$teacher_id." ");

        }
        function getCoursesOfStudentWithId($data){

            return $this->db->query("SELECT courses.* FROM courses, taken_courses WHERE courses.course_id = taken_courses.course_id and student_id=".$this->db->escape($data)." ")->result_array();
        }
        function getCourses($data){

            return $this->db->query("SELECT * FROM courses")->result_array();
        }
    }
?>