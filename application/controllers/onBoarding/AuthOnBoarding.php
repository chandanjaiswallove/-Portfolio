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



    ///============== login student =================/
    
    public function modeLloginStudent()
{
    $result = $this->OnBoarding_Model->loginStudent();

    // ❌ LOGIN ERROR
    if (is_string($result)) {

        if ($result === 'invalid_credentials') {
            sweetAlert('Login Failed', 'User ID or Email not found.', 'error', base_url('onBoarding'));
        }

        if ($result === 'wrong_password') {
            sweetAlert('Login Failed', 'Incorrect password.', 'error', base_url('onBoarding'));
        }
    }

    // ✅ LOGIN SUCCESS
    if (is_array($result) && $result['status'] === 'success') {

        $user = $result['user'];

        // 🔐 SESSION SET
        $this->session->set_userdata([
            'user_id'   => $user->user_id,
            'email'     => $user->email,
            'logged_in' => true
        ]);

        sweetAlert('Welcome', 'Login successful!', 'success', base_url('admin_playground'));
    }
}


    //// logout system

    public function logout()
{
    // 🔓 REMOVE SPECIFIC SESSION DATA
    $this->session->unset_userdata([
        'user_id',
        'email',
        'logged_in'
    ]);

    // OR (FULL DESTROY)
     $this->session->sess_destroy();

    redirect('onBoarding');
}



}