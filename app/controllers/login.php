<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		
        	if($this->session->userdata('logged_in')){
     		 redirect('home');
    		}

        	$success= NULL;
            $message = "";
                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
                $this -> form_validation -> set_rules ( array(

				array(
						'field' => 'login',
						'label' => 'E-Mail Address',
						'rules' => 'required|xss_clean',
					),
				array(
						'field' => 'password',
						'label' => 'password',
						'rules' => 'required|min_length[5]|xss_clean',
					),
				
			));

            

                
                if($this->form_validation->run())
                {

                	
                    $users =  $this -> user -> getWithCondition(
                                        array(
                                            'email' => $this -> input -> post('login'), 
                                            'password' => $this -> input -> post('password')
                                        )
                      );
                  
                    if(count($users ) > 0)
                    {
                        foreach($users as $user){
                           
                              
                                $this -> session -> set_userdata('logged_in', true);
                                $this -> session -> set_userdata('user_id', $user -> user_id);
                                $this -> session -> set_userdata('email', $user -> email);
                                $this -> session -> set_userdata('type', $user -> type);
                                
                                  
                                redirect('home');
                        }
                       
                    }else{
                        $message = "<h4>No such record found!</h4>";
                    }
                    
                    
                }

		$this->load->view('pages/login', array('message' => $message, 'success' => $success));
	
        }
		
}
