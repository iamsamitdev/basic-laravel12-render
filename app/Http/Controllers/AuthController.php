<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // ฟังก์ชันแสดงฟอร์มลงทะเบียน
    public function showRegister() {
        // ส่งข้อมูลไปยัง view ชื่อ register.blade.php
        return view('auth.register');
    }

    // ฟังก์ชัน Submit ฟอร์มลงทะเบียนผู้ใช้
    public function register(Request $request) {
        // ตรวจสอบข้อมูลที่ส่งมาจากฟอร์ม
        $request->validate([
            'name' => 'required|max:64',
            'email' => 'required|email|max:64|unique:users',
            'phone' => 'nullable|max:16',
            'address' => 'nullable',
            'password' => 'required|min:6|max:64|confirmed'
        ], [
            'name.required' => 'กรุณากรอกชื่อ',
            'name.max' => 'ชื่อต้องไม่เกิน 64 ตัวอักษร',
            'email.required' => 'กรุณากรอกอีเมล',
            'email.email' => 'รูปแบบอีเมลไม่ถูกต้อง',
            'email.max' => 'อีเมลต้องไม่เกิน 64 ตัวอักษร',
            'email.unique' => 'อีเมลนี้ถูกใช้งานแล้ว',
            'phone.max' => 'เบอร์โทรศัพท์ต้องไม่เกิน 16 ตัวอักษร',
            'password.required' => 'กรุณากรอกรหัสผ่าน',
            'password.min' => 'รหัสผ่านต้องมีอย่างน้อย 6 ตัวอักษร',
            'password.max' => 'รหัสผ่านต้องไม่เกิน 64 ตัวอักษร',
            'password.confirmed' => 'ยืนยันรหัสผ่านไม่ตรงกัน'
        ]);

        // สร้างผู้ใช้ใหม่
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => bcrypt($request->password),
            'email_verified_at' => now()
        ]);

        // ส่งผู้ใช้ไปยังหน้าล็อกอินพร้อมกับข้อความแจ้งเตือน
        return redirect()->route('login')->with('success', 'ลงทะเบียนสำเร็จ! กรุณาเข้าสู่ระบบ');
    }

    // Login function
    public function showLogin() {
        // ส่งข้อมูลไปยัง view ชื่อ login.blade.php
        return view('auth.login');
    }

    // ฟังก์ชัน Submit ฟอร์ม login
    public function login(Request $request) {
        
        // ตรวจสอบข้อมูลที่ส่งมาจากฟอร์ม
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'กรุณากรอกอีเมล',
            'email.email' => 'รูปแบบอีเมลไม่ถูกต้อง',
            'password.required' => 'กรุณากรอกรหัสผ่าน'
        ]);

        // ตรวจสอบข้อมูลการล็อกอิน
        if(Auth::attempt($credentials)) {
            // ล็อกอินสำเร็จ ส่งผู้ใช้ไปยังหน้า Dashboard
            return redirect()->route('dashboard');
        }

        // ล็อกอินไม่สำเร็จ ส่งผู้ใช้กลับไปยังหน้าล็อกอินพร้อมกับข้อความแจ้งเตือน
        return back()->withErrors(['email' => 'อีเมลหรือรหัสผ่านไม่ถูกต้อง']);
    }

    // ฟังก์ชันแสดงหน้าแดชบอร์ด
    public function dashboard()
    {
        // ส่งข้อมูลผู้ใช้ไปยัง view ที่ชื่อ dashboard.blade.php
        return view('dashboard');
    }

    public function stock()
    {
        // ส่งข้อมูลผู้ใช้ไปยัง view ที่ชื่อ stock.blade.php
        return view('stock');
    }


    public function order()
    {
        // ส่งข้อมูลผู้ใช้ไปยัง view ที่ชื่อ order.blade.php
        return view('order');
    }

    public function report()
    {
        // ส่งข้อมูลผู้ใช้ไปยัง view ที่ชื่อ report.blade.php
        return view('report');
    }

    public function profile()
    {
        // ส่งข้อมูลผู้ใช้ไปยัง view ที่ชื่อ profile.blade.php
        return view('profile');
    }


    public function setting()
    {
        // ส่งข้อมูลผู้ใช้ไปยัง view ที่ชื่อ setting.blade.php
        return view('setting');
    }

    // ฟังก์ชันออกจากระบบ
    public function logout()
    {
        // ออกจากระบบ
        Auth::logout();

        // ส่งผู้ใช้ไปยังหน้าล็อกอิน
        return redirect()->route('login');
    }
}
