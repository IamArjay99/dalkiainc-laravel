<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function index()
    {
        if (is_website_maintenance()) {
            return to_route('maintenance');
        }

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
        if (is_website_maintenance()) {
            return to_route('maintenance');
        }

        $data['page_title'] = 'About Us';
        $data['company_information'] = $this->get_company_information();
        $data['company_history'] = $this->get_company_history();
        $data['company_services'] = $this->get_company_services();

        return view('website.about.index', $data);
    }

    public function projects()
    {
        if (is_website_maintenance()) {
            return to_route('maintenance');
        }

        $data['page_title'] = 'Projects';
        $data['company_information'] = $this->get_company_information();
        $data['projects'] = $this->get_projects();
        $data['project_category'] = $this->get_project_category();

        return view('website.projects.index', $data);
    }

    public function project_filter(Request $request)
    {
        if (is_website_maintenance()) {
            return to_route('maintenance');
        }

        $project_categories = $request->projectCategories;
        $status = $request->status;
        $current_page = $request->current_page ?? 1;
        $offset = $request->offset ?? 0;
        $limit = $request->limit ?? 6;

        $where_project_categories = empty($project_categories) ? '1=1' : 'project_category_id IN ('. implode(',', $project_categories) .')';

        $project_summary = DB::table('projects')
            ->selectRaw('(SELECT COUNT(*) FROM projects WHERE status = "ONGOING" AND '. $where_project_categories .') as ongoing_projects')
            ->selectRaw('(SELECT COUNT(*) FROM projects WHERE status = "COMPLETED" AND '. $where_project_categories .') as completed_projects')
            ->selectRaw('CEILING((SELECT COUNT(*) FROM projects WHERE status = "ONGOING" AND '. $where_project_categories .') / '. $limit .') as ongoing_pages')
            ->selectRaw('CEILING((SELECT COUNT(*) FROM projects WHERE status = "COMPLETED" AND '. $where_project_categories .') / '. $limit .') as completed_pages')
            ->first();

        $ongoing_pages = $project_summary->ongoing_pages ?? 1;
        $ongoing_pages_data = [];
        for ($i = 1; $i <= $ongoing_pages; $i++) {
            $ongoing_pages_data[] = [
                'label' => $i,
                'offset' => ($i - 1) * $limit,
                'limit' => $limit
            ];
        }

        $completed_pages = $project_summary->completed_pages ?? 1;
        $completed_pages_data = [];
        for ($i = 1; $i <= $completed_pages; $i++) {
            $completed_pages_data[] = [
                'label' => $i,
                'offset' => ($i - 1) * $limit,
                'limit' => $limit
            ];
        }

        if ($status) {
            $data = DB::table('projects')
                ->select('id', 'name', 'image', 'floor', 'scope_of_work', 'status')
                ->where('status', $status)
                ->whereRaw('('. $where_project_categories .')')
                ->offset($offset)
                ->limit($limit)
                ->get();
        }
        else {
            $data = DB::table('projects')
                ->select('id', 'name', 'image', 'floor', 'scope_of_work', 'status')
                ->whereRaw('('. $where_project_categories .')')
                ->offset($offset)
                ->limit($limit)
                ->get();
        }

        if ($status == 'ONGOING') {
            $output = [
                'ongoing_projects' => [
                    'current_page' => $current_page,
                    'pages' => $ongoing_pages_data,
                    'data' => $data
                ]
            ];
        }
        else if ($status == 'COMPLETED') {
            $output = [
                'completed_projects' => [
                    'current_page' => $current_page,
                    'pages' => $completed_pages_data,
                    'data' => $data
                ]
            ];
        }
        else {
            $output = [
                'ongoing_projects' => [
                    'current_page' => $current_page,
                    'pages' => $ongoing_pages_data,
                    'data' => DB::table('projects')
                        ->select('id', 'name', 'image', 'floor', 'scope_of_work', 'status')
                        ->where('status', 'ONGOING')
                        ->whereRaw('('. $where_project_categories .')')
                        ->offset($offset)
                        ->limit($limit)
                        ->get()
                ],
                'completed_projects' => [
                    'current_page' => $current_page,
                    'pages' => $completed_pages_data,
                    'data' => DB::table('projects')
                        ->select('id', 'name', 'image', 'floor', 'scope_of_work', 'status')
                        ->where('status', 'COMPLETED')
                        ->whereRaw('('. $where_project_categories .')')
                        ->offset($offset)
                        ->limit($limit)
                        ->get()
                ]
            ];
        }
        
        echo json_encode($output);
    }

    public function certifications_and_awards()
    {
        if (is_website_maintenance()) {
            return to_route('maintenance');
        }

        $data['page_title'] = 'Certifications and Awards';
        $data['company_information'] = $this->get_company_information();
        $data['certifications_and_awards'] = $this->get_certifications_and_awards();

        return view('website.certifications-and-awards.index', $data);
    }

    public function careers()
    {
        if (is_website_maintenance()) {
            return to_route('maintenance');
        }

        $data['page_title'] = 'Careers';
        $data['company_information'] = $this->get_company_information();
        $data['careers'] = $this->get_careers();

        return view('website.careers.index', $data);
    }

    public function career_details($id)
    {
        if (is_website_maintenance()) {
            return to_route('maintenance');
        }

        $page_data = DB::table('careers')
            ->where('id', $id)
            ->where('status', 1)
            ->first();

        if (!$page_data) {
            return redirect()
                ->route('website.careers')
                ->with([
                    'status' => 'error',
                    'message' => "Something went wrong, please contact your system administrator."
                ]);
        }

        $data['page_title'] = 'Career Details';
        $data['company_information'] = $this->get_company_information();
        $data['career'] = $page_data;

        return view('website.careers.details', $data);
    }

    public function career_apply(Request $request, $id) 
    {
        if (is_website_maintenance()) {
            return to_route('maintenance');
        }

        $request->validate([
            'full_name' => 'required|min:2|max:255',
            'email_address' => 'required|email|max:255',
            'subject' => 'required|min:2|max:255',
            'message' => 'required|min:2|max:500',
            'file' => 'required|mimes:pdf,doc,docx|max:2048'
        ]);

        $career = DB::table('careers')->where('id', $id)->first();
        $job_title = $career->job_title;

        $full_name = $request->full_name;
        $file = $request->file('file');
        $destination_path = 'uploads/resume/';

        $filename_arr = explode('.', $file->getClientOriginalName());
        $extension = array_splice($filename_arr, count($filename_arr)-1, 1);

        $filename = str_replace(' ', '-', strtolower($full_name)) . time() . '.' . $extension[0];
        $file->move($destination_path, $filename);

        $insert = DB::table('applicant_reports')->insert([
            'career_id' => $id,
            'job_title' => $job_title,
            'full_name' => $full_name,
            'email_address' => $request->email_address,
            'subject' => $request->subject,
            'message' => $request->message,
            'resume' => $filename,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if ($insert)
        {
            return redirect()
                ->route('website.careers')
                ->with([
                    'status' => 'success',
                    'message' => 'Your application has been submitted successfully. We will get back to you soon.'
                ]);
        }
        else
        {
            return redirect()
                ->route('website.careers')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }

    public function contacts()
    {
        if (is_website_maintenance()) {
            return to_route('maintenance');
        }

        $data['page_title'] = 'Contacts';
        $data['company_information'] = $this->get_company_information();
        
        return view('website.contacts.index', $data);
    }

    public function contact_inquire(Request $request)
    {
        if (is_website_maintenance()) {
            return to_route('maintenance');
        }

        $request->validate([
            'full_name' => 'required|min:2|max:255',
            'email_address' => 'required|email|max:255',
            'subject' => 'required|min:2|max:255',
            'message' => 'required|min:2|max:500',
        ]);

        $full_name = $request->full_name;
        $insert = DB::table('inquiry_reports')->insert([
            'full_name' => $full_name,
            'email_address' => $request->email_address,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if ($insert)
        {
            return redirect()
                ->route('website.contacts')
                ->with([
                    'status' => 'success',
                    'message' => 'Your inquiry has been submitted successfully. We will get back to you soon.'
                ]);
        }
        else
        {
            return redirect()
                ->route('website.contacts')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }

    public function maintenance()
    {
        if (!is_website_maintenance()) {
            return to_route('website.index');    
        }

        return view('maintenance.index');
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
        $limit = 6;

        $project_summary = DB::table('projects')
            ->selectRaw('(SELECT COUNT(*) FROM projects WHERE status = "ONGOING") as ongoing_projects')
            ->selectRaw('(SELECT COUNT(*) FROM projects WHERE status = "COMPLETED") as completed_projects')
            ->selectRaw('CEILING((SELECT COUNT(*) FROM projects WHERE status = "ONGOING") / '. $limit .') as ongoing_pages')
            ->selectRaw('CEILING((SELECT COUNT(*) FROM projects WHERE status = "COMPLETED") / '. $limit .') as completed_pages')
            ->first();

        $ongoing_pages = $project_summary->ongoing_pages ?? 1;
        $ongoing_pages_data = [];
        for ($i = 1; $i <= $ongoing_pages; $i++) {
            $ongoing_pages_data[] = [
                'label' => $i,
                'offset' => ($i - 1) * $limit,
                'limit' => $limit
            ];
        }

        $completed_pages = $project_summary->completed_pages ?? 1;
        $completed_pages_data = [];
        for ($i = 1; $i <= $completed_pages; $i++) {
            $completed_pages_data[] = [
                'label' => $i,
                'offset' => ($i - 1) * $limit,
                'limit' => $limit
            ];
        }

        $showcase_projects = DB::table('projects')
            ->orderBy('id', 'asc')
            ->limit(6)
            ->get();

        $ongoing_projects = DB::table('projects')
            ->where('status', 'ONGOING')
            ->orderBy('id', 'asc')
            ->limit($limit)
            ->get();
        $completed_projects = DB::table('projects')
            ->where('status', 'COMPLETED')
            ->orderBy('id', 'asc')
            ->limit($limit)
            ->get();

        $ongoing_data = [
            'pages' => $ongoing_pages_data,
            'data' => $ongoing_projects
        ];

        $completed_data = [
            'pages' => $completed_pages_data,
            'data' => $completed_projects
        ];

        return [
            'showcase_projects' => $showcase_projects,
            'ongoing_projects' => $ongoing_data,
            'completed_projects' => $completed_data
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
