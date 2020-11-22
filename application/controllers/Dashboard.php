<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

	

	public function index()
	{	
			if(isset($this->session->userdata['admin']['admin_id'])){

				$data['subview'] = "dashboard";
	    	    $this->load->view('layouts/standart',$data);

			}
	    	else{
	      		redirect('http://localhost/piazza/index.php/Enterence','refresh');
	    	}
	    	

	}


}

?>

