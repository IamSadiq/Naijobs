<?php

class Jobs_Model extends CI_Model{

	/*function Jobs_Model(){
		// Call the Model constructor
        parent::Model();
	}*/

	public function __construct(){
		// Call the Model constructor
		parent::__construct();
    	$this->load->database();
    }

	function get_jobs(){
		
		//Query the data table for every record and row
             
        if ($query = $this->db->get('jobs')){
        	//if ($query->num_rows() < 0)
            	//show_error('Database is empty!');
            return $query->result_array();
        }
	}

	public function create_job($body, $uname, $time)
	{
	    //$this->load->helper('url');

	    //$slug = url_title($this->input->post('title'), 'dash', TRUE);

		$title = $this->input->post('title');
		//$body = $this->textarea->post('body');
		$body = htmlspecialchars($body);
		$uname = htmlspecialchars($uname);
		$time = htmlspecialchars($time);
		//mysql_real_escape_string();

	    $data = array(
	        'title' => $title,
	        'body' => $body,
	        'posted_by' => $uname,
	        'time_posted' => $time
	    );

	    $sql = "INSERT INTO jobs(title, body, posted_by, time_posted) VALUES(?,?,?,?)";
		/*$this->db->insert('jobs', $data)*/
	    if($this->db->query($sql, $data))
	    	return TRUE;
	    else
	    	return FALSE;
	}
};