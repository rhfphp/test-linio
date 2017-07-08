<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://localhost/index.php/home
	 *	- or -
	 * 		http://localhost/index.php/home/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://localhost/
	 */
	public function index()
	{
		
		if((INT)$this->input->post('initial') == '' or (INT)$this->input->post('end') == ''){
			$_POST['initial'] = 1;
			$_POST['end'] = 100;
		}
		
		for ($i = (INT)$this->input->post('initial'); $i <= (INT)$this->input->post('end'); $i++) {
			
			switch ($i) {
				
				case ($i % 3) == 0 AND ($i % 5) == 0:
			        $number = 'Linianos';
			        break;
				
			    case ($i % 3) == 0:
			        $number = 'Linio';
			        break;
			    
			    case ($i % 5) == 0:
			        $number = 'IT';
			        break;
			        
			    default:
			    	$number = $i;
			}
			
			$data['numbers'][] = $number;
		    
		}
		
		$this->load->view('home_view', $data);
	}
}
