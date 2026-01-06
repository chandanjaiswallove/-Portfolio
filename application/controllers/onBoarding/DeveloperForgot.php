<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeveloperForgot extends CI_Controller
{
    public function developer_forgot()
    {
        $this->load->view('onBoarding/pages/developer_forgot');
    }
}
