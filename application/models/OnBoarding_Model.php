<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OnBoarding_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

   
    public function registerStudent()
{
    // ================= POST DATA =================
    $email            = trim($this->input->post('email'));
    $user_id          = trim($this->input->post('user_id'));
    $password         = (string) $this->input->post('password');
    $confirm_password = (string) $this->input->post('confirm_password');

    // ================= PASSWORD MISMATCH =================
    if ($password !== $confirm_password) {
        $this->sweetAlert(
            'Password Mismatch',
            'Password and Confirm Password do not match.',
            'error',
            base_url('onBoardingUser')
        );
    }

    // ================= PASSWORD HASH =================
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // ================= EMAIL EXISTS CHECK =================
    $emailExists = $this->db
        ->where('email', $email)
        ->get('register_directory')
        ->row();

    if ($emailExists) {
        $this->sweetAlert(
            'Already Registered',
            'This email is already registered. Please login.',
            'warning',
            base_url('onBoarding')
        );
    }

    // ================= USER ID EXISTS CHECK =================
    $userIdExists = $this->db
        ->where('user_id', $user_id)
        ->get('register_directory')
        ->row();

    if ($userIdExists) {
        $this->sweetAlert(
            'User ID Exists',
            'Generated User ID already exists. Please try again.',
            'error',
            base_url('onBoardingUser')
        );
    }

    // ================= INSERT DATA =================
    $insertData = [
        'user_id'    => $user_id,
        'email'      => $email,
        'password'   => $hashedPassword,
        'status'     => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ];

    if ($this->db->insert('register_directory', $insertData)) {
        $this->sweetAlert(
            'Success',
            'Registration successful! Please login.',
            'success',
            base_url('onBoarding')
        );
    } else {
        $this->sweetAlert(
            'Failed',
            'Something went wrong. Please try again.',
            'error',
            base_url('onBoardingUser')
        );
    }
}







    // ============================================================
    // ✅ SWEETALERT HELPER FUNCTION
    // ============================================================
    private function sweetAlert($title, $text, $icon, $redirect)
    {
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script>
            document.addEventListener("DOMContentLoaded", function () {
                swal({
                    title: "' . $title . '",
                    text: "' . $text . '",
                    icon: "' . $icon . '"
                }).then(function () {
                    window.location.href = "' . $redirect . '";
                });
            });
        </script>';
        exit;
    }
}