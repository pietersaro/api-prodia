<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_auth extends CI_Controller {
    
        function __construct() {

            parent::__construct();

            $this->load->model('M_auth');
        }

    
	public function index(){
             $this->load->view('login');
//		die('masuk');
	}
        
       

        public function login()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			
                    $params = json_decode(file_get_contents('php://input'), TRUE);
                    $username = $params['username'];
                    $password = $params['password'];
                    
            $response = $this->M_auth->login($username,$password);
     
                    if ($response['status'] == 200) {
                            json_output($response['status'],$response);
                    }else{
                            json_output(401 ,array('status' => $response['status'],'message' => $response['message']));
                    }

			

		}
	}

	public function logout()
	{	
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->M_auth->check_auth_client();
			if($check_auth_client == true){
		        	$response = $this->M_auth->logout();
				json_output($response['status'],$response);
			}
		}
	}
	
}
