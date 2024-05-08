<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyHistoryController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Company History';
        $data['data'] = DB::table('company_history')
            ->orderBy('year', 'desc')
            ->get();

        return view('admin.company-history.index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'New Company History';
        $data['form_todo'] = 'CREATE';

        return view('admin.company-history.form', $data);
    }

    public function save(Request $request)
    {
        $request->validate([
            'year' => [
                'required',
                'digits:4',
                'integer',
                'min:2000',
                'max:'.date('Y'),
                'unique:company_history,year'
            ],
            'description' => 'required|string|max:2000'
        ]);

        $year = $request->year;

        $insert = DB::table('company_history')->insert([
            'year' => $year,
            'description' => $request->description,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if ($insert)
        {
            return redirect()
                ->route('admin.company-history')
                ->with([
                    'status' => 'success',
                    'message' => "$year created successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.company-history')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }

    public function view($id)
    {
        $data['page_title'] = 'View Company History';
        $data['form_todo'] = 'READ';
        $data['data'] = DB::table('company_history')
            ->where('company_history.id', $id)
            ->first();

        return view('admin.company-history.form', $data);
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Company History';
        $data['form_todo'] = 'UPDATE';
        $data['data'] = DB::table('company_history')
            ->where('company_history.id', $id)
            ->first();

        return view('admin.company-history.form', $data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'year' => [
                'required',
                'digits:4',
                'integer',
                'min:2000',
                'max:'.date('Y'),
                'unique:company_history,year,'.$id
            ],
            'description' => 'required|string|max:2000'
        ]);
        
        $year = $request->year;

        $update = DB::table('company_history')
            ->where('id', $id)
            ->update([
                'year' => $year,
                'description' => $request->description,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        if ($update)
        {
            return redirect()
                ->route('admin.company-history')
                ->with([
                    'status' => 'success',
                    'message' => "$year updated successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.company-history')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }

    public function delete($id)
    {
        $data = DB::table('company_history')->where('id', $id)->first();
        $year = $data->year;

        $delete = DB::table('company_history')->where('id', $id)->delete();
        if ($delete)
        {
            return redirect()
                ->route('admin.company-history')
                ->with([
                    'status' => 'success',
                    'message' => "$year deleted successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.company-history')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }
}
