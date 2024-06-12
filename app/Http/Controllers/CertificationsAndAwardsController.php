<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertificationsAndAwardsController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Certifications & Awards';
        $data['data'] = DB::table('certification_awards')
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.certifications-and-awards.index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'New Certification and Award';
        $data['form_todo'] = 'CREATE';

        return view('admin.certifications-and-awards.form', $data);
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => [
                'required',
                'string',
                'max:100',
                'unique:certification_awards,title'
            ],
            'description' => 'required|string|max:2000',
            'status' => 'required'
        ]);

        $destination_path = 'uploads/img/certifications-and-awards';
        
        $title = $request->title;
        $image = $request->file('image');

        $image_store = $request->image_store;
        $filename = $image_store ?? 'default.png';

        if ($image && !empty($image))
        {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120'
            ]);

            $filename_arr = explode('.', $image->getClientOriginalName());
            $extension = array_splice($filename_arr, count($filename_arr)-1, 1);
            $filename = $title.time().'.'.$extension[0];

            $image->move($destination_path, $filename);
        }

        $insert = DB::table('certification_awards')->insert([
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
                ->route('admin.certifications-and-awards')
                ->with([
                    'status' => 'success',
                    'message' => "$title created successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.certifications-and-awards')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }

    public function view($id)
    {
        $data['page_title'] = 'View Certification and Award';
        $data['form_todo'] = 'READ';
        $data['data'] = DB::table('certification_awards')
            ->where('id', $id)
            ->first();

        return view('admin.certifications-and-awards.form', $data);
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Certification and Award';
        $data['form_todo'] = 'UPDATE';
        $data['data'] = DB::table('certification_awards')
            ->where('id', $id)
            ->first();

        return view('admin.certifications-and-awards.form', $data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => [
                'required',
                'string',
                'max:100',
                'unique:certification_awards,title,' . $id
            ],
            'description' => 'required|string|max:2000',
            'status' => 'required'
        ]);

        $destination_path = 'uploads/img/certifications-and-awards';
        
        $title = $request->title;
        $image = $request->file('image');

        $image_store = $request->image_store;
        $filename = $image_store ?? 'default.png';

        if ($image && !empty($image))
        {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120'
            ]);

            $filename_arr = explode('.', $image->getClientOriginalName());
            $extension = array_splice($filename_arr, count($filename_arr)-1, 1);
            $filename = $title.time().'.'.$extension[0];

            $image->move($destination_path, $filename);
        }

        $update = DB::table('certification_awards')
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
                ->route('admin.certifications-and-awards')
                ->with([
                    'status' => 'success',
                    'message' => "$title updated successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.certifications-and-awards')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }

    public function delete($id)
    {
        $data = DB::table('certification_awards')->where('id', $id)->first();
        $title = $data->title;

        $delete = DB::table('certification_awards')->where('id', $id)->delete();
        if ($delete)
        {
            return redirect()
                ->route('admin.certifications-and-awards')
                ->with([
                    'status' => 'success',
                    'message' => "$title deleted successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.certifications-and-awards')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }
}
