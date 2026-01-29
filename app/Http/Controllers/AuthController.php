<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Hiển thị form đăng ký
    public function showSignIn() {
        return view('signin');
    }

    // Xử lý kiểm tra đăng ký
    public function checkSignIn(Request $request) {
        // Lấy dữ liệu gửi lên
        $user = $request->input('username');
        $pass = $request->input('password');
        $repass = $request->input('repass');
        $mssv = $request->input('mssv');
        $lop = $request->input('lopmonhoc');
        $gioitinh = $request->input('gioitinh');

        // THÔNG TIN SINH VIÊN LÀM BÀI (Bạn sửa lại cho đúng thông tin của bạn nhé)
        $student = [
            'username' => 'Kietng',
            'mssv' => '4003367',
            'lop' => '67PM1',
            'gioitinh' => 'Nam'
        ];

        // LOGIC KIỂM TRA
        if ($pass !== $repass) {
            return "Đăng ký thất bại (Mật khẩu nhập lại không khớp)";
        }

        // Kiểm tra khớp thông tin sinh viên
        if ($user == $student['username'] &&
            $mssv == $student['mssv'] &&
            $lop == $student['lop'] &&
            $gioitinh == $student['gioitinh']) {
            return "Đăng ký thành công!";
        }

        return "Đăng ký thất bại (Thông tin sai lệch)";
    }
}