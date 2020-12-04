<?php 
    class Posts_model extends CI_Model {
        
        function getPostsOfCourse($data){

            return $this->db->query("SELECT * FROM posts WHERE post_course_id=".$data." ")->result_array();
        }

    }
?>