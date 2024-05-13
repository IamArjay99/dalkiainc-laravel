<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $total_projects = DB::table('projects')->count();
        $ongoing_projects = DB::table('projects')->where('status', 'ONGOING')->count();
        $total_awards = DB::table('certification_awards')->count();
        $total_careers = DB::table('careers')->count();
        $total_applicants = DB::table('applicant_reports')->count();
        $total_inquiries = DB::table('inquiry_reports')->count();

        $website_data = [];
        for ($month = 1; $month <= 12; $month++) {
            $website_data[] = DB::table('website_users')
                ->select(DB::raw('count(id) as total_users'), DB::raw('sum(page_views) as total_page_views'))
                ->whereRaw('year(created_at) = ? AND month(created_at) = ?', [date('Y'), $month])
                ->first();
        }


        $data['page_title'] = 'Dashboard';
        $data['data'] = [
            'total_projects' => $total_projects,
            'ongoing_projects' => $ongoing_projects,
            'total_awards' => $total_awards,
            'total_careers' => $total_careers,
            'website_data' => $website_data,
            'total_applicants' => $total_applicants,
            'total_inquiries' => $total_inquiries,
        ];

        return view('admin.dashboard.index', $data);
    }
}
