<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MissionAndVisionController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Mission and Vision';
        $data['data'] = DB::table('company_information')
            ->where('company_information.id', 1)
            ->first();

        return view('admin.mission-and-vision.index', $data);
    }

    public function edit($id)
    {
        $page_data = DB::table('company_information')
            ->where('company_information.id', $id)
            ->first();

        if (!$page_data)
        {
            return redirect()
                ->route('admin.mission-and-vision')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }

        $data['page_title'] = 'Edit Mission and Vision';
        $data['form_todo'] = 'UPDATE';
        $data['data'] = $page_data;

        return view('admin.mission-and-vision.form', $data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'mission' => [
                'required',
                'string',
                'max:2000'
            ],
            'vision' => [
                'required',
                'string',
                'max:2000'
            ]
        ]);

        $update = DB::table('company_information')
            ->where('id', $id)
            ->update([
                'mission' => $request->mission,
                'vision' => $request->vision,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        if ($update)
        {
            return redirect()
                ->route('admin.mission-and-vision')
                ->with([
                    'status' => 'success',
                    'message' => "Mission and Vision updated successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.mission-and-vision')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }
}
