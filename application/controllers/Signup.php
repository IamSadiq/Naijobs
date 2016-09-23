<?php

class Signup extends CI_Controller {

        /*public function index()
        {
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->load->model('Users_Model');

                $this->form_validation->set_rules('username', 'Username', 'callback_validate_username');
                $this->form_validation->set_rules('password', 'Password', 'trim');
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|matches[password]');
                
                $data['page_header'] = "NaiJobs";
                switch ($_SERVER['PHP_SELF']) {
                        case '/NaiJobs/index.php/signup':
                                $data['page_title'] = "NaiJobs | Signup";
                                break;
                        case '/naijobs/index.php/signup':
                                $data['page_title'] = "NaiJobs | Signup";
                                break;
                        default:
                                $data['page_title'] = "NaiJobs";
                                break;
                }

                $this->load->view('templates/header', $data);
                $this->sign_up($data);
                $this->load->view('templates/footer');
        }

        public function validate_username($str)
        {
                if ($this->Users_Model->check_username($str) != '')
                {
                        $this->form_validation->set_message('validate_username', 'Sorry '. $str .' is already taken');
                        return FALSE;
                }
                else
                        return TRUE;
        }

        public function sign_up($vals)
        {
                if ($this->form_validation->run() == FALSE)
                        $this->load->view('signup');
                else
                {
                        $this->load->Users_Model->create_user();
                        $this->load->view('signin', $vals);
                }
        }
        */
}