<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        if (!is_super_admin())
        {
            return redirect()
                ->back()
                ->with([
                    'status' => 'error',
                    'message' => 'Access Denied!'
                ]);
        }

        $data['page_title'] = 'User';
        $data['data'] = DB::table('users')
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.users.index', $data);
    }

    public function view($id)
    {
        if ($id != auth()->user()->id && !is_super_admin())
        {
            return redirect()
                ->back()
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }

        $page_data = DB::table('users')
            ->where('id', $id)
            ->first();

        if (!$page_data)
        {
            return redirect()
                ->route('admin.dashboard')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }

        $data['page_title'] = 'View User';
        $data['form_todo'] = 'READ';
        $data['data'] = $page_data;

        return view('admin.users.form', $data);
    }

    public function edit($id)
    {
        if ($id != auth()->user()->id && !is_super_admin())
        {
            return redirect()
                ->route('admin.dashboard')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }

        $page_data = DB::table('users')
            ->where('id', $id)
            ->first();

        if (!$page_data)
        {
            return redirect()
                ->route('admin.dashboard')
                ->with([
                    'status' => 'error',
                    'message' => 'Something went wrong, please contact your system administrator.'
                ]);
        }

        $data['page_title'] = 'Edit User';
        $data['form_todo'] = 'UPDATE';
        $data['data'] = $page_data;

        return view('admin.users.form', $data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:50',
            'email' => [
                'required',
                'email',
                'min:2',
                'max:100',
                'unique:users,email,'.$id
            ],
            'new_password' => [
                'required',
                'string',
                'min:8'
            ],
            'confirm_password' => [
                'required',
                'string',
                'min:8'
            ],
        ]);

        $old_password = $request->old_password;
        $new_password = $request->new_password;
        $confirm_password = $request->confirm_password;

        if ($new_password === $confirm_password)
        {
            $request->validate([
                'new_password' => 'required|min:8|max:30',
            ]);

            $user_password = DB::table('users')->select('password')->where('id', $id)->first()->password ?? '';
            if (!Hash::check($old_password, $user_password))
            {
                return redirect()
                    ->back()
                    ->withErrors([
                        'old_password' => 'The old password does not match.',
                    ]);
            }
            else {
                if ($new_password === $old_password)
                {
                    return redirect()
                        ->back()
                        ->withErrors([
                            'new_password' => 'The new password cannot be the same as the old password.',
                        ]);
                }

                $hashed_password = Hash::make($new_password);
                $update = DB::table('users')
                    ->where('id', $id)
                    ->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => $hashed_password
                    ]);

                if ($update) {
                    return redirect()
                        ->route('admin.users.view', ['id' => $id])
                        ->with([
                            'status' => 'success',
                            'message' => 'Password updated successfully'
                        ]);
                } 
                else {
                    return redirect()
                        ->back()
                        ->withErrors([
                            'status' => 'error',
                            'message' => 'Something went wrong, please contact your system administrator.'
                        ]);
                }
            }
        }
        else {
            return redirect()
                ->back()
                ->withErrors([
                    'confirm_password' => 'The password confirmation does not match.',
                ]);
        }
    }
}
