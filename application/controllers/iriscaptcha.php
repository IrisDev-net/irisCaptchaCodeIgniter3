<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class iriscaptcha extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        
		$this->load->helper(array('url'));
		$this->load->library('Iris_Captcha');
		
	}

	function index()
	{
		
		//var_dump($this->iris_captcha->Get_Js());
		//echo $this->iris_captcha->Get_Js();
		$data['js']	= $this->iris_captcha->Get_Js();
		$this->load->view('iriscaptcha',$data);
	}
	
	function check_answer()
	{
		//echo $_GET["irisCaptcha"];
		if(isset($_GET['irisCaptcha'])) 
		{
			 $data['res']=$this->iris_captcha->Check_Answer($_GET["irisCaptcha"],$this->input->ip_address(),false);
		     $this->load->view('iriscaptcha_result',$data);
		}
		else
		{
			$data['js']	= $this->iris_captcha->Get_Js();
		    $this->load->view('iriscaptcha',$data);
		}
		
		
		
		
		
	}



}	