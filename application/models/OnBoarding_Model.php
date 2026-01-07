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
