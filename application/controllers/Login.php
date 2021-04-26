<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Browse
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
        
        $username = $this->input->post('user_name', TRUE);
        $pwd = $this->input->post('user_pwd', TRUE);
        $logout = $this->input->post('logout', TRUE);

        if($logout === 'true') {
            session_destroy();
            redirect(site_url('Landing'));
        }

        if($username == "admin" && $pwd = "admin") {
            $adminSession = array(
                'admin' => true
            );
            $this->session->set_userdata($adminSession);
            redirect(site_url('admin'));
        } else {
            redirect(site_url('Landing'));
        }

    }
}