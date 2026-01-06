<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewCredentials extends CI_Controller
{
    public function new_credentials()
    {
        $this->load->view('onBoarding/pages/new_credentials');
    }
}
