<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicantReportsController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Applicant Reports';
        $data['data'] = DB::table('applicant_reports')
            ->orderBy('applicant_reports.id', 'asc')
            ->get();

        return view('admin.applicant-reports.index', $data);
    }

    public function view($id)
    {
        $page_data = DB::table('applicant_reports')
            ->where('applicant_reports.id', $id)
            ->first();

        if (!$page_data)
        {
            return redirect()
                ->route('admin.applicant-reports')
                ->with([
                    'status' => 'error',
                    'message' => 'Applicant not found'
                ]);
        }

        $data['page_title'] = 'View Applicant';
        $data['form_todo'] = 'READ';
        $data['data'] = $page_data;

        return view('admin.applicant-reports.form', $data);
    }
}
