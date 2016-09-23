<?php

class Users_Model extends CI_Model{

	public function __construct(){
		// Call the Model constructor
		parent::__construct();
    	$this->load->database();
    }

	function check_username($str){
		
		//Query the data table for every record and row
        $query = $this->db->get_where('users', array('uname' => $str));
             
        if ($query->num_rows() > 0){
            return $query->result_array();
        }
	}

	public function create_user()
	{

	    $data = array(
	        'uname' => $this->input->post('username'),
	        'pword' => $this->input->post('password')
	    );

	    return $this->db->insert('users', $data);
	}

	public function confirm_user($username, $password){
		$data = array(
	        'uname' => $this->input->post('username'),
	        'pword' => $this->input->post('password')
	    );

	    $query = $this->db->get_where('users', $data);
	    
		if ($query->num_rows() > 0){
			//$this->load->library('session');
			//$this->session->set_userdata('username', $username);
			$_SESSION['username'] = $username;
			return TRUE;
		}
		else
			return FALSE;
	}
}