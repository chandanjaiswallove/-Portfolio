<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_Model extends CI_Model
{


    // ============================================================
    // ✅ get all data from pricing_card and  pricing_items
    // ============================================================
    public function get_price_card()
    {
        // Get pricing cards
        $cards = $this->db
            ->order_by('id', 'DESC')
            ->get('pricing_card')
            ->result();

        if (!$cards) {
            return [];
        }

        // Attach items
        foreach ($cards as $card) {
            $card->items = $this->db
                ->where('pricing_id', $card->id)
                ->get('pricing_items')
                ->result();
        }

        return $cards;
    }


    // ============================================================
    // ✅ get all data from introduce_directory 
    // ============================================================
    public function get_introduceData()
    {
        $query = $this->db
            ->order_by('id', 'DESC')   // latest record
            ->limit(1)                 // sirf ek
            ->get('introduce_directory');

        return $query->num_rows() ? $query->row() : null;
    }

    // ============================================================
    // ✅ get latest data from about_directory
    // ============================================================
    public function get_aboutData()
    {
        return $this->db
            ->order_by('id', 'DESC')
            ->limit(1)
            ->get('about_directory')
            ->row();
    }

    // ============================================================
    // ✅ get latest data from services_directory
    // ============================================================
    public function get_serviceData()
    {
        return $this->db
            ->order_by('id', 'ASC')
            ->get('services_directory')
            ->result();
    }

    // ============================================================
    // ✅ get all data from myskill_directory
    // ============================================================
    public function get_myskill_directory()
    {
        return $this->db
            ->order_by('id', 'ASC')
            ->get('myskill_directory')
            ->result();   // ✅ MULTIPLE ROWS
    }

    // ============================================================
    // ✅ get all data from contact_directory
    // ============================================================
    public function get_contact_directory()
    {
        return $this->db
            ->order_by('id', 'DESC')
            ->get('contact_directory')
            ->result();   // MULTIPLE ROWS
    }

    // ============================================================
    // ✅ get all data from testimonial_directory
    // ============================================================    
    public function get_testimonial_directory()
    {
        return $this->db
            ->order_by('id', 'ASC')
            ->get('testimonial_directory')
            ->result();
    }

    // ============================================================
    // ✅ get all data from company_logo_directory
    // ============================================================    
    public function get_company_logoData()
    {
        return $this->db
            ->order_by('id', 'DESC')
            ->get('company_logo_directory')
            ->result(); // multiple rows
    }

    // ============================================================
    // ✅ get all portfolio projects with tags
    // ============================================================
    public function get_portfolio_projects()
    {
        $projects = $this->db
            ->order_by('id', 'DESC')
            ->get('portfolio_projects')
            ->result();

        foreach ($projects as $project) {
            $project->tags = $this->db
                ->where('project_id', $project->id)
                ->get('portfolio_tags')
                ->result();
        }

        return $projects;
    }





}
