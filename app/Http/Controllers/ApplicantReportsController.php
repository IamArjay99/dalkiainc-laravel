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

    public function create()
    {
        $data['page_title'] = 'New Applicant Reports';
        $data['form_todo'] = 'CREATE';

        return view('admin.applicant-reports.form', $data);
    }

    public function save(Request $request)
    {
        $request->validate([
            'job_title' => [
                'required',
                'string',
                'max:100',
                'unique:applicant_reports,job_title'
            ],
            'job_description' => 'required|string|max:2000',
            'status' => 'required'
        ]);

        $job_title = $request->job_title;

        $insert = DB::table('applicant_reports')->insert([
            'job_title' => $job_title,
            'job_description' => $request->job_description,
            'status' => $request->status,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if ($insert)
        {
            return redirect()
                ->route('admin.applicant-reports')
                ->with([
                    'status' => 'success',
                    'message' => "$job_title created successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.applicant-reports')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
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
                    'message' => 'Applicant Report not found'
                ]);
        }

        $data['page_title'] = 'View Applicant Reports';
        $data['form_todo'] = 'READ';
        $data['data'] = $page_data;

        return view('admin.applicant-reports.form', $data);
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Applicant Reports';
        $data['form_todo'] = 'UPDATE';
        $data['data'] = DB::table('applicant_reports')
            ->where('applicant_reports.id', $id)
            ->first();

        return view('admin.applicant-reports.form', $data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'job_title' => [
                'required',
                'string',
                'max:100',
                'unique:applicant_reports,job_title,'.$id
            ],
            'job_description' => 'required|string|max:2000',
            'status' => 'required'
        ]);
        
        $job_title = $request->job_title;

        $update = DB::table('applicant_reports')
            ->where('id', $id)
            ->update([
                'job_title' => $job_title,
                'job_description' => $request->job_description,
                'status' => $request->status,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        if ($update)
        {
            return redirect()
                ->route('admin.applicant-reports')
                ->with([
                    'status' => 'success',
                    'message' => "$job_title updated successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.applicant-reports')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }

    public function delete($id)
    {
        $data = DB::table('applicant_reports')->where('id', $id)->first();
        $job_title = $data->job_title;

        $delete = DB::table('applicant_reports')->where('id', $id)->delete();
        if ($delete)
        {
            return redirect()
                ->route('admin.applicant-reports')
                ->with([
                    'status' => 'success',
                    'message' => "$job_title deleted successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.applicant-reports')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }
}
