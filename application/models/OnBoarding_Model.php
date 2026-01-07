<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OnBoarding_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // =================== Signup Student ===================
    public function registerStudent()
    {
        // POST check
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        // Collect form data
        $email            = $this->input->post('email', true);
        $user_id          = $this->input->post('user_id', true);
        $password         = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');

        // 1️⃣ Password Match Check
        if ($password !== $confirm_password) {
            $this->sweetAlert(
                'Password Mismatch',
                'Password and Confirm Password must be same.',
                'error',
                base_url('onBoardingUser')
            );
            return;
        }

        // 2️⃣ Password Hash (BCRYPT)
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // 3️⃣ Prepare Insert Data
        $insertData = [
            'user_id'    => $user_id,
            'email'      => $email,
            'password'   => $hashedPassword,
            'status'     => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // 4️⃣ Insert into DB
        $this->db->insert('register_directory', $insertData);

        // 5️⃣ Success Alert
        $this->sweetAlert(
            'Registration Successful',
            'Account created successfully. Please login.',
            'success',
            base_url('onBoarding')
        );
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
