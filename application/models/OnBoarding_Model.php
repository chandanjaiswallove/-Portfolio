<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OnBoarding_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // =================== USER REGISTER ===================
    public function registerStudent()
    {
        // ✅ Button name se submit check
        if (isset($_POST['submitData'])) {

            $email       = $this->input->post('email', true);
            $user_id     = $this->input->post('user_id', true);
            $password    = $this->input->post('password', true);
            $confirmPass = $this->input->post('confirm_password', true);

            // 🔴 Password mismatch
            if ($password !== $confirmPass) {
                echo "<script>
                        alert('Password and Confirm Password do not match');
                        window.location.href = '" . base_url('onBoarding') . "';
                      </script>";
                exit;
            }

            // 🔴 Email already exists
            if ($this->db->where('email', $email)->count_all_results('register_directory') > 0) {
                echo "<script>
                        alert('Email already registered');
                        window.location.href = '" . base_url('onBoarding') . "';
                      </script>";
                exit;
            }

            // 🔴 User ID already exists
            if ($this->db->where('user_id', $user_id)->count_all_results('register_directory') > 0) {
                echo "<script>
                        alert('User ID already exists, try again');
                        window.location.href = '" . base_url('onBoarding') . "';
                      </script>";
                exit;
            }

            // ✅ Insert data
            $data = [
                'user_id'    => $user_id,
                'email'      => $email,
                'password'   => password_hash($password, PASSWORD_BCRYPT),
                'status'     => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $this->db->insert('register_directory', $data);

            // ✅ Success alert
            echo "<script>
                    alert('Registration successful. You can login now.');
                    window.location.href = '" . base_url('onBoarding') . "';
                  </script>";
            exit;
        }
    }
}
