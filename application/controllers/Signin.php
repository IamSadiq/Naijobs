<?php

class Signin extends CI_Controller {

        /*public function index()
        {
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->load->model('Users_Model');
                $this->load->model('Jobs_Model');

                $this->form_validation->set_rules('username', 'Username', 'callback_confirm_entries');
                $this->form_validation->set_rules('password', 'Password', 'trim');
                
                $data['page_header'] = "NaiJobs";
                switch ($_SERVER['PHP_SELF']) {
                        case '/NaiJobs/index.php/signin':
                                $data['page_title'] = "NaiJobs | Signin";
                                break;
                        case '/naijobs/index.php/signin':
                                $data['page_title'] = "NaiJobs | Signin";
                                break;
                        default:
                                $data['page_title'] = "NaiJobs";
                                break;
                }

                $this->load->view('templates/header', $data);
                $this->sign_in($data);
                $this->load->view('templates/footer');
        }

        public function confirm_entries($uname, $pword)
        {
                if (!$this->Users_Model->confirm_user($uname, $pword))
                {
                        $this->form_validation->set_message('confirm_entries', 'invalid username or password');
                        return FALSE;
                }
                else
                        return TRUE;
        }

        public function sign_in($vals)
        {
                if ($this->form_validation->run() == FALSE)
                        $this->load->view('signin');
                else
                {
                        $vals['result'] = $this->Jobs_Model->get_jobs();
                        $this->load->view('jobs_view', $vals);
                }
        }
        */
}