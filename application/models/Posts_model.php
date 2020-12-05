<?php 
    class Posts_model extends CI_Model {
        
        function getPostsOfCourse($data){

            return $this->db->query("SELECT * FROM posts WHERE post_course_id=".$data." ")->result_array();
        }
        function getPostsOfStudent($data){

            return $this->db->query("SELECT * FROM posts WHERE post_student_id=".$data." ")->result_array();
        }

        function getPostWithId($data){

            return $this->db->query("SELECT * FROM posts WHERE post_id=".$data." ")->result_array();
        }

        function addPostTeacher($data,$course_id,$added_id){

            $this->db->query("INSERT INTO posts SET post_short_desc=".$this->db->escape($data['post_short_desc'])." , post_long_desc=".$this->db->escape($data['post_long_desc']).", post_title=".$this->db->escape($data['post_title']).", post_date=".$this->db->escape($data['post_date']).", post_course_id='".$course_id."', post_teacher_id='".$added_id."' ");

        }

        function updatePost($data,$course_id,$post_id){

            $this->db->query("UPDATE posts SET post_short_desc=".$this->db->escape($data['post_short_desc'])." , post_long_desc=".$this->db->escape($data['post_long_desc']).", post_title=".$this->db->escape($data['post_title']).", post_date=".$this->db->escape($data['post_date'])." WHERE post_course_id='".$course_id."' AND post_id='".$post_id."' ");

        }

        function addPostStudent($data,$course_id,$added_id){

            $this->db->query("INSERT INTO posts SET post_short_desc=".$this->db->escape($data['post_short_desc'])." , post_long_desc=".$this->db->escape($data['post_long_desc']).", post_title=".$this->db->escape($data['post_title']).", post_date=".$this->db->escape($data['post_date']).", post_course_id='".$course_id."', post_student_id='".$added_id."' ");

        }

        function deletePost($post_id){

            $this->db->query("DELETE FROM posts WHERE post_id = ".$post_id." ");
            
        }


    }
?>