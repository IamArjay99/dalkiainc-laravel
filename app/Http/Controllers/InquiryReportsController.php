<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InquiryReportsController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Inquiry Reports';
        $data['data'] = DB::table('inquiry_reports')
            ->orderBy('inquiry_reports.id', 'asc')
            ->get();

        return view('admin.inquiry-reports.index', $data);
    }

    public function view($id)
    {
        $page_data = DB::table('inquiry_reports')
            ->where('inquiry_reports.id', $id)
            ->first();

        if (!$page_data)
        {
            return redirect()
                ->route('admin.inquiry-reports')
                ->with([
                    'status' => 'error',
                    'message' => 'Inquiry not found'
                ]);
        }

        $data['page_title'] = 'View Inquiry';
        $data['form_todo'] = 'READ';
        $data['data'] = $page_data;

        return view('admin.inquiry-reports.form', $data);
    }
}
