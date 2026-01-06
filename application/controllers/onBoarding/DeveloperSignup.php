<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeveloperSignup extends CI_Controller
{
    public function loaDdeveloper_signup()
    {
        $this->load->view('onBoarding/pages/developer_signup');
    }
}
