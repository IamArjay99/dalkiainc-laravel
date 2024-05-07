<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Career';
        $data['data'] = DB::table('careers')
            ->orderBy('careers.id', 'asc')
            ->get();

        return view('admin.careers.index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'New Career';
        $data['form_todo'] = 'CREATE';

        return view('admin.careers.form', $data);
    }

    public function save(Request $request)
    {
        $request->validate([
            'job_title' => [
                'required',
                'string',
                'max:100',
                'unique:careers,job_title'
            ],
            'job_description' => 'required|string|max:2000',
            'status' => 'required'
        ]);

        $job_title = $request->job_title;

        $insert = DB::table('careers')->insert([
            'job_title' => $job_title,
            'job_description' => $request->job_description,
            'status' => $request->status,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if ($insert)
        {
            return redirect()
                ->route('admin.careers')
                ->with([
                    'status' => 'success',
                    'message' => "$job_title created successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.careers')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }

    public function view($id)
    {
        $data['page_title'] = 'View Career';
        $data['form_todo'] = 'READ';
        $data['data'] = DB::table('careers')
            ->where('careers.id', $id)
            ->first();

        return view('admin.careers.form', $data);
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Career';
        $data['form_todo'] = 'UPDATE';
        $data['data'] = DB::table('careers')
            ->where('careers.id', $id)
            ->first();

        return view('admin.careers.form', $data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'job_title' => [
                'required',
                'string',
                'max:100',
                'unique:careers,job_title,'.$id
            ],
            'job_description' => 'required|string|max:255',
            'status' => 'required'
        ]);
        
        $job_title = $request->job_title;

        $update = DB::table('careers')
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
                ->route('admin.careers')
                ->with([
                    'status' => 'success',
                    'message' => "$job_title updated successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.careers')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }

    public function delete($id)
    {
        $data = DB::table('careers')->where('id', $id)->first();
        $job_title = $data->job_title;

        $delete = DB::table('careers')->where('id', $id)->delete();
        if ($delete)
        {
            return redirect()
                ->route('admin.careers')
                ->with([
                    'status' => 'success',
                    'message' => "$job_title deleted successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.careers')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }
}
