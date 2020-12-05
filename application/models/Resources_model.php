<?php
class Resources_model extends CI_Model {

    function getResources($data){

        return $this->db->query("SELECT * FROM resource WHERE resource_course_id = ".$this->db->escape($data)." ")->result_array();
    }

    function getResource($resource_id){

        return $this->db->query("SELECT * FROM resource WHERE resource_id = ".$resource_id." ")->row_array(0,"array");
    }

    function addResource($data,$resource_course_id){

        $this->db->query("INSERT INTO resource SET resource_short_desc=".$this->db->escape($data['resource_short_desc'])." , resource_long_desc=".$this->db->escape($data['resource_long_desc']).",  resource_url=".$this->db->escape($data['resource_url']).", resource_course_id='".$resource_course_id."' ");

    }

  /*  function updateHomework($hmw,$course_id,$hmw_id){

        $this->db->query("UPDATE homeworks SET homework_short_desc = ".$this->db->escape($hmw['homework_short_desc']).", homework_long_desc = ".$this->db->escape($hmw['homework_long_desc']).", resource_file=".$this->db->escape($hmw['resource_file'])." WHERE homework_course_id = '".$course_id."' AND homework_id = '".$hmw_id."'  ");
    }

    function deleteHomework($hmw_id){

        $this->db->query("DELETE FROM homeworks WHERE homework_id = ".$hmw_id." ");

    }*/

}
?>