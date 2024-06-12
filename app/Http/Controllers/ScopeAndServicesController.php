<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScopeAndServicesController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Scope and Services';
        $data['data'] = DB::table('company_services')
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.scope-and-services.index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'New Scope and Services';
        $data['form_todo'] = 'CREATE';

        return view('admin.scope-and-services.form', $data);
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => [
                'required',
                'string',
                'min:4',
                'max:100',
                'unique:company_services,title'
            ],
            'description' => 'required|string|min:10|max:2000',
            'status' => 'required'
        ]);

        $destination_path = 'uploads/img/scope-and-services';
        
        $title = $request->title;
        $image = $request->file('image');

        $image_store = $request->image_store;
        $filename = $image_store ?? 'default.png';

        if ($image && !empty($image))
        {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            $filename_arr = explode('.', $image->getClientOriginalName());
            $extension = array_splice($filename_arr, count($filename_arr)-1, 1);
            $filename = $title.time().'.'.$extension[0];

            $image->move($destination_path, $filename);
        }

        $insert = DB::table('company_services')->insert([
            'title' => $title,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $filename,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if ($insert)
        {
            return redirect()
                ->route('admin.scope-and-services')
                ->with([
                    'status' => 'success',
                    'message' => "$title created successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.scope-and-services')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }

    public function view($id)
    {
        $page_data = DB::table('company_services')->where('id', $id)->first();

        if (!$page_data)
        {
            return redirect()
                ->route('admin.scope-and-services')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }

        $data['page_title'] = 'View Scope and Services';
        $data['form_todo'] = 'READ';
        $data['data'] = $page_data;

        return view('admin.scope-and-services.form', $data);
    }

    public function edit($id)
    {
        $page_data = DB::table('company_services')->where('id', $id)->first();

        if (!$page_data)
        {
            return redirect()
                ->route('admin.scope-and-services')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }

        $data['page_title'] = 'Edit Scope and Services';
        $data['form_todo'] = 'UPDATE';
        $data['data'] = $page_data;

        return view('admin.scope-and-services.form', $data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => [
                'required',
                'string',
                'min:4',
                'max:100',
                'unique:company_services,title,' . $id
            ],
            'description' => 'required|string|min:10|max:2000',
            'status' => 'required'
        ]);

        $destination_path = 'uploads/img/scope-and-services';
        
        $title = $request->title;
        $image = $request->file('image');

        $image_store = $request->image_store;
        $filename = $image_store ?? 'default.png';

        if ($image && !empty($image))
        {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            $filename_arr = explode('.', $image->getClientOriginalName());
            $extension = array_splice($filename_arr, count($filename_arr)-1, 1);
            $filename = $title.time().'.'.$extension[0];

            $image->move($destination_path, $filename);
        }

        $update = DB::table('company_services')
            ->where('id', $id)
            ->update([
                'title' => $title,
                'description' => $request->description,
                'status' => $request->status,
                'image' => $filename,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        if ($update)
        {
            return redirect()
                ->route('admin.scope-and-services')
                ->with([
                    'status' => 'success',
                    'message' => "$title updated successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.scope-and-services')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }

    public function delete($id)
    {
        $data = DB::table('company_services')->where('id', $id)->first();
        $title = $data->title;

        $delete = DB::table('company_services')->where('id', $id)->delete();
        if ($delete)
        {
            return redirect()
                ->route('admin.scope-and-services')
                ->with([
                    'status' => 'success',
                    'message' => "$title deleted successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.scope-and-services')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }
}
