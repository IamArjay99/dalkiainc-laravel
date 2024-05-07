<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Project';
        $data['data'] = DB::table('projects')
            ->leftJoin('project_category', 'project_category.id', '=', 'projects.project_category_id')
            ->select('projects.*', 'project_category.name as project_category')
            ->orderBy('projects.id', 'asc')
            ->get();

        return view('admin.projects.index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'New Project';
        $data['form_todo'] = 'CREATE';
        $data['form_data'] = [
            'project_category' => DB::table('project_category')->get()
        ];

        return view('admin.projects.form', $data);
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'max:100',
                'unique:projects,name'
            ],
            'project_category_id' => 'required',
            'scope_of_work' => 'required|string|max:255',
            'floor' => 'required|string|max:100',
            'status' => 'required'
        ]);

        $destination_path = 'uploads/img/projects';
        
        $name = $request->name;
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
            $filename = $name.time().'.'.$extension[0];

            $image->move($destination_path, $filename);
        }

        $insert = DB::table('projects')->insert([
            'name' => $name,
            'project_category_id' => $request->project_category_id,
            'client' => $request->client,
            'description' => $request->description,
            'scope_of_work' => $request->scope_of_work,
            'floor' => $request->floor,
            'status' => $request->status,
            'image' => $filename,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if ($insert)
        {
            return redirect()
                ->route('admin.projects')
                ->with([
                    'status' => 'success',
                    'message' => "$name created successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.projects')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }

    public function view($id)
    {
        $data['page_title'] = 'View Project';
        $data['form_todo'] = 'READ';
        $data['data'] = DB::table('projects')
            ->leftJoin('project_category', 'project_category.id', '=', 'projects.project_category_id')
            ->select('projects.*', 'project_category.name as project_category')
            ->where('projects.id', $id)
            ->first();

        return view('admin.projects.form', $data);
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Project';
        $data['form_todo'] = 'UPDATE';
        $data['data'] = DB::table('projects')
            ->leftJoin('project_category', 'project_category.id', '=', 'projects.project_category_id')
            ->select('projects.*', 'project_category.name as project_category')
            ->where('projects.id', $id)
            ->first();
        $data['form_data'] = [
            'project_category' => DB::table('project_category')->get()
        ];

        return view('admin.projects.form', $data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'max:100',
                'unique:projects,name,'.$id
            ],
            'project_category_id' => 'required',
            'scope_of_work' => 'required|string|max:255',
            'floor' => 'required|string|max:100',
            'status' => 'required'
        ]);

        $destination_path = 'uploads/img/projects';
        
        $name = $request->name;
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
            $filename = $name.time().'.'.$extension[0];

            $image->move($destination_path, $filename);
        }

        $update = DB::table('projects')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'project_category_id' => $request->project_category_id,
                'client' => $request->client,
                'description' => $request->description,
                'scope_of_work' => $request->scope_of_work,
                'floor' => $request->floor,
                'status' => $request->status,
                'image' => $filename,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        if ($update)
        {
            return redirect()
                ->route('admin.projects')
                ->with([
                    'status' => 'success',
                    'message' => "$name updated successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.projects')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }

    public function delete($id)
    {
        $data = DB::table('projects')->where('id', $id)->first();
        $name = $data->name;

        $delete = DB::table('projects')->where('id', $id)->delete();
        if ($delete)
        {
            return redirect()
                ->route('admin.projects')
                ->with([
                    'status' => 'success',
                    'message' => "$name deleted successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.projects')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }
}
