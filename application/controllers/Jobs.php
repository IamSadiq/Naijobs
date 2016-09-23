<?php
class Jobs extends CI_Controller{

	public function __construct(){
		// Call the Controller constructor
		parent::__construct();
		$this->load->model('Jobs_Model');
        $this->load->library('session');
	}
	
	function index(){

		$data['result'] = $this->Jobs_Model->get_jobs();
        $data['page_header'] = "NaiJobs";

        switch ($_SERVER['PHP_SELF']) {
        	case '/NaiJobs/index.php/jobs':
        		$data['page_title'] = "NaiJobs | Home";
        		break;
        	case '/naijobs/index.php/jobs':
        		$data['page_title'] = "NaiJobs | Home";
        		break;
        	default:
        		$data['page_title'] = "NaiJobs";
        		break;
        }
 
 	 	$this->load->view('templates/header',$data);
        $this->load->view('jobs_view',$data);
 	 	$this->load->view('templates/footer');
	}

	function postJob(){
        $this->load->library('form_validation');
        $data['page_header'] = "NaiJobs";
        $data['page_title'] = "NaiJobs | Post Job";

        /*
            $this->load->library('form_validation');
        $this->load->library('session');
        $data['page_header'] = "NaiJobs";
        $data['page_title'] = "NaiJobs | Post Job";

        $this->load->view('templates/header',$data);
        if(isset($this->session->userdata('username')))
            $this->load->view('job_post',$data);

        if(!isset($this->session->userdata('username')))
            $this->load->view('signin',$data);
        $this->load->view('templates/footer');
        */

        $this->load->view('templates/header',$data);
		$this->load->view('job_post',$data);
 	 	$this->load->view('templates/footer');
	}

    function registerJob(){
        $this->load->library('form_validation');
        $this->form_validation->run();

        //$who = $_SESSION['username'];
        //$who = $this->session->username;
        $content = $_POST['body'];
        $who = $this->session->userdata('username');
        $time = date('h:ma', time())  . ' on ' . date('M d 20y', time());
        if($this->Jobs_Model->create_job($content, $who, $time))
            $this->index();
        else
            $this->form_validation->set_message('Failed to register Job');
    }

	function view_job(){
        $data['page_header'] = "NaiJobs";
        $data['page_title'] = "NaiJobs | View Job";
 
 	 	$this->load->view('templates/header',$data);
        $this->load->view('view_job', $data);
 	 	$this->load->view('templates/footer');
	}

    function signin(){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Users_Model');
        $this->load->model('Jobs_Model');

        $this->form_validation->set_rules('username', 'Username', 'callback_confirm_entries');
        $this->form_validation->set_rules('password', 'Password', 'trim');
                
        $data['page_header'] = "NaiJobs";
        switch ($_SERVER['PHP_SELF']) {
            case '/NaiJobs/index.php/jobs/signin':
                $data['page_title'] = "NaiJobs | Signin";
                break;
            case '/naijobs/index.php/jobs/signin':
                $data['page_title'] = "NaiJobs | Signin";
                break;
            default:
                $data['page_title'] = "NaiJobs";
                break;
        }

        $this->load->view('templates/header', $data);
        if ($this->form_validation->run() == FALSE)
            $this->load->view('signin');
        else{
            $vals['result'] = $this->Jobs_Model->get_jobs();
            $this->load->view('jobs_view', $vals);
        }
        $this->load->view('templates/footer');
    }

    function signup(){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Users_Model');

        $this->form_validation->set_rules('username', 'Username', 'callback_validate_username');
        $this->form_validation->set_rules('password', 'Password', 'trim');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|matches[password]');
                
        $data['page_header'] = "NaiJobs";
        switch ($_SERVER['PHP_SELF']) {
            case '/NaiJobs/index.php/jobs/signup':
                $data['page_title'] = "NaiJobs | Signup";
                break;
            case '/naijobs/index.php/jobs/signup':
                $data['page_title'] = "NaiJobs | Signup";
                break;
            default:
                $data['page_title'] = "NaiJobs";
                break;
        }

        $this->load->view('templates/header', $data);
        if ($this->form_validation->run() == FALSE)
            $this->load->view('signup');
        else{
            $this->load->Users_Model->create_user();
            $this->load->view('signin', $data);
        }
        $this->load->view('templates/footer');
    }

    function signout(){
        $this->index();
        session_unset();
        session_destroy();
    }

    function confirm_entries($uname, $pword){
        if (!$this->Users_Model->confirm_user($uname, $pword)){
            $this->form_validation->set_message('confirm_entries', 'invalid username or password');
            return FALSE;
        }
        else
            return TRUE;
    }

    function validate_username($str){
        if ($this->Users_Model->check_username($str) != ''){
            $this->form_validation->set_message('validate_username', 'Sorry '. $str .' is already taken');
            return FALSE;
        }
        else
            return TRUE;
    }
}