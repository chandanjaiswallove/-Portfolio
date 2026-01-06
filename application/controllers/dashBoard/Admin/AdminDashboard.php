<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property Card_Model $Card
 * @property Dashboard_Model $Dash
 */

class AdminDashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Card_Model', 'Card'); // Header/footer ka Card_Model load huwa 
        $this->load->model('Dashboard_Model', 'Dash'); // Dashboard Model ka load huwa

    }

    // Generic page loader
    private function load_page($page)
    {
        $data['card'] = $this->Card->get_card(); // Header/footer ke liye data Profile_card ka Data
        $data['intro'] = $this->Dash->get_introduceData(); // Header/footer ke liye data Profile_card ka Data
        $data['about'] = $this->Dash->get_aboutData();       // ✅ About data



        // Header
        $this->load->view('dashboard/admin/layouts/dashHeader', $data);

        // Page content
        $this->load->view('dashboard/admin/pages/' . $page, $data);

        // Footer
        $this->load->view('dashboard/admin/layouts/dashFooter', $data);
    }

    // Ab har page method sirf load_page ko call karega
    public function loaDadmin_dashboard()
    {
        $this->load_page('admin_dashboard');
    }

    public function loaDabout()
    {
        $this->load_page('about');
    }

    public function loaDintroduce()
    {
        $this->load_page('introduce');
    }

    public function loaDmyskill()
    {
        $this->load_page('myskill');
    }

    public function loaDprofile_card()
    {
        $this->load_page('profile_card');
    }

    public function loaDservices()
    {
        $this->load_page('services');
    }

    public function loaDtestimonials()
    {
        $this->load_page('testimonials');
    }

    public function loaDvisitor_data()
    {
        $this->load_page('visitor_data');
    }

    public function loaDresume()
    {
        $this->load_page('resume');
    }

    public function loaDportfolio()
    {
        $this->load_page('portfolio');
    }

    public function loaDpricing_card()
    {
        $this->load_page('pricing_card');
    }
}
