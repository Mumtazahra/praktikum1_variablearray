<?php 
class Auth extends CI_Model 
{
	public function __construct()
	{
        parent::__construct();
	}
 
	function regis($email,$username,$password,$created_at,$role)
	{
		$data_us = array(
            'email'=>$email,
			'username'=>$username,
			'password'=>$password,
            'created_at'=>$created_at,
			'role'=>$role
		);
		$this->db->insert('users',$data_us);
	}
    
}
?>