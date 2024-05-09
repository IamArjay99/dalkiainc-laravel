<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyOverviewController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Company Overview';
        $data['data'] = DB::table('company_information')
            ->where('company_information.id', 1)
            ->first();

        return view('admin.company-overview.index', $data);
    }

    public function edit($id)
    {
        $page_data = DB::table('company_information')
            ->where('company_information.id', $id)
            ->first();

        if (!$page_data)
        {
            return redirect()
                ->route('admin.company-overview')
                ->with([
                    'status' => 'error',
                    'message' => "Something went wrong, please contact your system administrator."
                ]);
        }

        $data['page_title'] = 'Edit Company Overview';
        $data['form_todo'] = 'UPDATE';
        $data['data'] = $page_data;

        return view('admin.company-overview.form', $data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'company_overview' => [
                'required',
                'string',
                'min:10',
                'max:5000'
            ],
            'brief_description' => [
                'required',
                'string',
                'min:10',
                'max:200'
            ]
        ]);

        $update = DB::table('company_information')
            ->where('id', $id)
            ->update([
                'company_overview' => $request->company_overview,
                'brief_description' => $request->brief_description,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        if ($update)
        {
            return redirect()
                ->route('admin.company-overview')
                ->with([
                    'status' => 'success',
                    'message' => "Company Overview updated successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.company-overview')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }
}
