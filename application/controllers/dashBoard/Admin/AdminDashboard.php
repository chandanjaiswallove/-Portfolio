<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboard extends CI_Controller
{
    public function loaDadmin_dashboard()
    {
        $this->load->view('dashboard/admin/pages/admin_dashboard');
    }

    public function loaDabout()
    {
        $this->load->view('dashboard/admin/pages/about');
    }

    public function loaDintroduce()
    {
        $this->load->view('dashboard/admin/pages/introduce');
    }


    public function loaDmyskill()
    {
        $this->load->view('dashboard/admin/pages/myskill');
    }

    public function loaDprofile_card()
    {
        $this->load->view('dashboard/admin/pages/profile_card');
    }

    public function loaDservices()
    {
        $this->load->view('dashboard/admin/pages/services');
    }

    public function loaDtestimonials()
    {
        $this->load->view('dashboard/admin/pages/testimonials');
    }

    public function loaDvisitor_data()
    {
        $this->load->view('dashboard/admin/pages/visitor_data');
    }

    public function loaDresume()
    {
        $this->load->view('dashboard/admin/pages/resume');
    }

    public function loaDportfolio()
    {
        $this->load->view('dashboard/admin/pages/portfolio');
    }

    public function loaDpricing_card()
    {
        $this->load->view('dashboard/admin/pages/pricing_card');
    }


}
