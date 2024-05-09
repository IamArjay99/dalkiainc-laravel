<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanySettingsController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Company Settings';
        $data['data'] = DB::table('company_information')
            ->where('company_information.id', 1)
            ->first();

        return view('admin.company-settings.index', $data);
    }

    public function edit($id)
    {
        $page_data = DB::table('company_information')
            ->where('company_information.id', $id)
            ->first();

        if (!$page_data)
        {
            return redirect()
                ->route('admin.company-settings')
                ->with([
                    'status' => 'error',
                    'message' => "Something went wrong, please contact your system administrator."
                ]);
        }

        $data['page_title'] = 'Edit Company Settings';
        $data['form_todo'] = 'UPDATE';
        $data['data'] = $page_data;

        return view('admin.company-settings.form', $data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'address' => 'required',
            'contact_number' => 'required',
            'email_address' => 'required',
            'business_hours' => 'required'
        ]);

        $update = DB::table('company_information')
            ->where('id', $id)
            ->update([
                'address' => $request->address,
                'contact_number' => $request->contact_number,
                'email_address' => $request->email_address,
                'business_hours' => $request->business_hours,
                'facebook_link' => $request->facebook_link,
                'instagram_link' => $request->instagram_link,
                'twitter_link' => $request->twitter_link,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        if ($update)
        {
            return redirect()
                ->route('admin.company-settings')
                ->with([
                    'status' => 'success',
                    'message' => "Company Settings updated successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.company-settings')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }
}
