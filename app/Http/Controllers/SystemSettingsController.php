<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SystemSettingsController extends Controller
{
    public function index()
    {
        if (!is_super_admin()) {
            return redirect()->route('admin.dashboard');
        }

        $data['page_title'] = 'System Settings';
        $data['data'] = DB::table('system_settings')
            ->get();

        return view('admin.system-settings.index', $data);
    }

    public function create()
    {
        if (!is_super_admin()) {
            return redirect()->route('admin.dashboard');
        }

        $data['page_title'] = 'New System Settings';
        $data['form_todo'] = 'CREATE';

        return view('admin.system-settings.form', $data);
    }

    public function save(Request $request)
    {
        $request->validate([
            'key' => [
                'required',
                'string',
                'min:2',
                'max:100',
                'unique:system_settings,key'
            ],
            'value' => 'required|string|max:2000',
            'description' => 'required|string|max:2000'
        ]);

        $key = $request->key;

        $insert = DB::table('system_settings')->insert([
            'key' => $key,
            'value' => $request->value,
            'description' => $request->description,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if ($insert)
        {
            return redirect()
                ->route('admin.system-settings')
                ->with([
                    'status' => 'success',
                    'message' => "$key created successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.system-settings')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }

    public function view($id)
    {
        if (!is_super_admin()) {
            return redirect()->route('admin.dashboard');
        }

        $page_data = DB::table('system_settings')
            ->where('system_settings.id', $id)
            ->first();

        if (!$page_data) {
            return redirect()->route('admin.system-settings');
        }

        $data['page_title'] = 'View System Settings';
        $data['form_todo'] = 'READ';
        $data['data'] = DB::table('system_settings')
            ->where('system_settings.id', $id)
            ->first();

        return view('admin.system-settings.form', $data);
    }

    public function edit($id)
    {
        if (!is_super_admin()) {
            return redirect()->route('admin.dashboard');
        }

        $page_data = DB::table('system_settings')
            ->where('system_settings.id', $id)
            ->first();

        if (!$page_data) {
            return redirect()->route('admin.system-settings');
        }
        
        $data['page_title'] = 'Edit System Settings';
        $data['form_todo'] = 'UPDATE';
        $data['data'] = DB::table('system_settings')
            ->where('system_settings.id', $id)
            ->first();

        return view('admin.system-settings.form', $data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'key' => [
                'required',
                'string',
                'min:2',
                'max:100',
                'unique:system_settings,key,'.$id
            ],
            'value' => 'required|string|max:2000',
            'description' => 'required|string|max:2000'
        ]);
        
        $key = $request->key;

        $update = DB::table('system_settings')
            ->where('id', $id)
            ->update([
                'key' => $key,
                'value' => $request->value,
                'description' => $request->description,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        if ($update)
        {
            return redirect()
                ->route('admin.system-settings')
                ->with([
                    'status' => 'success',
                    'message' => "$key updated successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.system-settings')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }

    public function delete($id)
    {
        $data = DB::table('system_settings')->where('id', $id)->first();
        $key = $data->key;

        $delete = DB::table('system_settings')->where('id', $id)->delete();
        if ($delete)
        {
            return redirect()
                ->route('admin.system-settings')
                ->with([
                    'status' => 'success',
                    'message' => "$key deleted successfully"
                ]);
        }
        else
        {
            return redirect()
                ->route('admin.system-settings')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }
    }
}
