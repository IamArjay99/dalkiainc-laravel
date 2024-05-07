<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Home';
        $data['company_information'] = $this->get_company_information();
        $data['company_history'] = $this->get_company_history();
        $data['company_services'] = $this->get_company_services();
        $data['projects'] = $this->get_projects();
        $data['certifications_and_awards'] = $this->get_certifications_and_awards();

        return view('website.home.index', $data);
    }

    public function about()
    {
        $data['page_title'] = 'About Us';
        $data['company_information'] = $this->get_company_information();
        $data['company_history'] = $this->get_company_history();
        $data['company_services'] = $this->get_company_services();

        return view('website.about.index', $data);
    }

    public function projects()
    {
        $data['page_title'] = 'Projects';
        $data['company_information'] = $this->get_company_information();
        $data['projects'] = $this->get_projects();
        $data['project_category'] = $this->get_project_category();

        return view('website.projects.index', $data);
    }

    public function certifications_and_awards()
    {
        $data['page_title'] = 'Certifications and Awards';
        $data['company_information'] = $this->get_company_information();
        $data['certifications_and_awards'] = $this->get_certifications_and_awards();

        return view('website.certifications-and-awards.index', $data);
    }

    public function careers()
    {
        $data['page_title'] = 'Careers';
        $data['company_information'] = $this->get_company_information();
        $data['careers'] = $this->get_careers();

        return view('website.careers.index', $data);
    }

    public function career_details($id)
    {
        $data['page_title'] = 'Career Details';
        $data['company_information'] = $this->get_company_information();
        $data['career'] = DB::table('careers')
            ->where('id', $id)
            ->first();

        return view('website.careers.details', $data);
    }

    public function contacts()
    {
        $data['page_title'] = 'Contacts';
        $data['company_information'] = $this->get_company_information();
        
        return view('website.contacts.index', $data);
    }

    // RETRIEVE DATA
    private function get_company_information()
    {
        $data = DB::table('company_information')->first();
        return $data;
    }

    private function get_company_history()
    {
        $data = DB::table('company_history')
            ->orderBy('year', 'asc')
            ->get();
        return $data;
    }

    private function get_company_services()
    {
        $data = DB::table('company_services')
            ->orderBy('id', 'asc')
            ->get();
        return $data;
    }

    private function get_projects()
    {
        $showcase_projects = DB::table('projects')
            ->orderBy('id', 'asc')
            ->limit(6)
            ->get();
        $all_projects = DB::table('projects')
            ->orderBy('id', 'asc')
            ->get();
        $ongoing_projects = DB::table('projects')
            ->where('status', 'ONGOING')
            ->orderBy('id', 'asc')
            ->get();
        $completed_projects = DB::table('projects')
            ->where('status', 'COMPLETED')
            ->orderBy('id', 'asc')
            ->get();
        return [
            'showcase_projects' => $showcase_projects,
            'all_projects' => $all_projects,
            'ongoing_projects' => $ongoing_projects,
            'completed_projects' => $completed_projects
        ];
    }

    private function get_certifications_and_awards()
    {
        $data = DB::table('certification_awards')
            ->orderBy('id', 'asc')
            ->get();
        return $data;
    }

    private function get_project_category()
    {
        $data = DB::table('project_category')
            ->select('id', 'name')
            ->selectRaw('(SELECT COUNT(*) FROM projects WHERE project_category_id = project_category.id GROUP BY project_category_id) as project_count')
            ->orderBy('id', 'asc')
            ->get();
        return $data;
    }

    private function get_careers()
    {
        $data = DB::table('careers')
            ->where('status', 1)
            ->orderBy('id', 'asc')
            ->get();
        return $data;
    }
}
