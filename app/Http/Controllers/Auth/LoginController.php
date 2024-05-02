<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check())
        {
            return redirect()->route('admin.dashboard');
        }

        $data['page_title'] = 'Login';
        return view('auth.login', $data);
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email'    => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials))
        {
            return redirect()->intended('admin/dashboard')->withSuccess('Signed in');
        }
        else
        {
            return back()
                ->withErrors(['Incorrect email address or password.'])
                ->withInput();
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/admin');
    }

    public function change_password()
    {
        $data['module_title'] = 'Change Password';
        return view('auth.change_password', $data);
    }

    public function update_password(Request $request, $id)
    {
        $new_password     = $request->new_password;
        $confirm_password = $request->confirm_password;

        if ($new_password === $confirm_password)
        {
            $validator = $request->validate([
                'new_password' => 'required|min:8|max:30',
            ]);

            $user = User::find($id);
            $old_password = $user->password;
            if (Hash::check($new_password, $old_password)) {
                return back()
                    ->withErrors(['New password must not be equal to old password.'])
                    ->withInput();
            }

            $user->password = Hash::make($new_password);
            $user->is_first_login = false;
            if ($user->save())
            {
                return redirect()->intended('dashboard')->withSuccess('Changed password successfully!');
            }
            else
            {
                return back()
                    ->withErrors(['An error occurred while processing the request. Please try again later.'])
                    ->withInput();
            }
        }
        else
        {
            return back()
                ->withErrors(['Password does not match.'])
                ->withInput();
        }
    }
}
