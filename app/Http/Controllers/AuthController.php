<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // validate
        ['student_code' => $student_code, 'password' => $password] = $request->validate([
            'student_code' => ['required', 'numeric'],
            'password' => ['required', 'string'],
        ], [
            'student_code.required' => "Mã số sinh viên không được bỏ trống!",
            'student_code.numeric' => "Mã số sinh viên phải là số!",
            'password.required' => "Mật khẩu không được bỏ trống!",
        ]);

        // format của dhhcm
        if (!str_starts_with($student_code, '15000')) {
            return back()->withErrors([
                'student_code' => "Tài khoản không hợp lệ"
            ]);
        }

        //lấy mssv
        $real_code = substr($student_code, 5);
        $user = DB::table('user')->where('student_code', $real_code)->first();
        if ($user) {
            if (Hash::check($password, $user->hashed_password)) {
                return redirect()->intended('/dashboard')->with('success', 'Đăng nhập thành công');
            } else {
                return back()->withErrors([
                    'password' => 'Mật khẩu không chính xác'
                ])->onlyInput('student_code');
            }
        } else {
            return back()->withErrors([
                'student_code' => "Tài khoản không hợp lệ"
            ]);
        }
    }
}
