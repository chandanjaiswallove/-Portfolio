<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthOnBoarding extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('OnBoarding_Model');
    }

    // ================= REGISTER USER =================
  public function modeLregisterUser()
{
    $status = $this->OnBoarding_Model->registerStudent();

    switch ($status) {

        case 'password_mismatch':
            sweetAlert(
                'Password Mismatch',
                'Password and Confirm Password do not match.',
                'error',
                base_url('onBoardingUser')
            );
            break;

        case 'single_user_only':
            sweetAlert(
                'Registration Closed',
                'Only one user can be registered in this system.',
                'warning',
                base_url('onBoarding')
            );
            break;

        case 'success':
            sweetAlert(
                'Success',
                'Registration successful!',
                'success',
                base_url('onBoarding')
            );
            break;

        default:
            sweetAlert(
                'Failed',
                'Something went wrong. Please try again.',
                'error',
                base_url('onBoardingUser')
            );
    }
}

}
