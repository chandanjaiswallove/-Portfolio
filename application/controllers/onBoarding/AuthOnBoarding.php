<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthOnBoarding extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('OnBoarding_Model'); // common data (logo / card)
    }

   


    // model function call here for Authentication

    public function modeLregisterUser()
    {
        $this->OnBoarding_Model->registerStudent(); // OnBooarding Model function call here 

    }
}
