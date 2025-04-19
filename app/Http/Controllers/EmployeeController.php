<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DB;
use App\Models\Employee;

class EmployeeController extends Controller
{
    
    public function index() {

        // อ่านข้อมูลทั้งหมด จากตาราง employees
        $employees = DB::table('employees')->get();

        // อ่านข้อมูลรายการเดียว จากตาราง employees
        $employees = DB::table('employees')->first();

        // อ่านข้อมูลพนักงานที่มี id = 3
        $employees = DB::table('employees')->where('id', 3)->first();

        // อ่านข้อมูลพนักงานที่มี id = 3 และ name = 'John'
        $employees = DB::table('employees')->where('id', 3)->where('fullname', 'Michael Smith')->first();

        // อ่านข้อมูลพนักงานที่มี id = 3 หรือ name = 'John'
        $employees = DB::table('employees')->where('id', 3)->orWhere('fullname', 'Michael Wong')->first();

        // อ่านข้อมูลพนักงานที่มี id = 3 และ name = 'John'
        $employees = DB::table('employees')->where([
            ['id', 3],
            ['fullname', 'Michael Smith']
        ])->first();

        // orderBy
        $employees = DB::table('employees')->orderBy('id', 'desc')->get(); // แสดงข้อมูลจากตาราง employees โดยเรียงลำดับจากมากไปน้อย

        // limit และ offset
        $employees = DB::table('employees')->skip(1)->take(2)->get(); // แสดงข้อมูลที่ 2 และ 3 จากตาราง employees

        // like
        $employees = DB::table('employees')->where('fullname', 'like', '%Doe%')->get(); // แสดงข้อมูลที่มีชื่อ John จากตาราง employees

        // select
        $employees = DB::table('employees')->select('id', 'fullname')->get(); // แสดงข้อมูลเฉพาะ id และ fullname จากตาราง employees

        // between
        $employees = DB::table('employees')->whereBetween('age', [35, 50])->get(); // แสดงข้อมูลที่อายุอยู่ระหว่าง 35 ถึง 50 ปี จากตาราง employees

        // min, max, avg, sum
        $employees = DB::table('employees')->min('age');  // แสดงอายุน้อยที่สุดจากตาราง employees
        $employees = DB::table('employees')->max('age');  // แสดงอายุมากที่สุดจากตาราง employees
        $employees = DB::table('employees')->avg('age');  // แสดงอายุเฉลี่ยจากตาราง employees
        $employees = DB::table('employees')->sum('age');  // แสดงผลรวมอายุจากตาราง employees

        // age > 30
        $employees = DB::table('employees')->where('age', '>', 30)->get(); // แสดงข้อมูลที่อายุมากกว่า 30 ปี จากตาราง employees

        // age < 30 
        $employees = DB::table('employees')->where('age', '<', 30)->get(); // แสดงข้อมูลที่อายุน้อยกว่า 30 ปี จากตาราง employees

        // dump() แสดงข้อมูลแบบ Array
        // แสดงข้อมูลของตัวแปร $employees​
        // ไม่ หยุดการทำงานของสคริปต์; สคริปต์จะดำเนินการต่อหลังจากแสดงข้อมูล
        // dump($employees);

        // dd() แสดงข้อมูลแบบ Array และหยุดการทำงาน
        // ย่อมาจาก "Dump and Die
        // แสดงข้อมูลของตัวแปร $employees​
        // หยุดการทำงานของสคริปต์; สคริปต์จะไม่ดำเนินการต่อ
        // dd($employees);

        // var_dump() แสดงข้อมูลแบบ Array
        // แสดงข้อมูลของตัวแปร $employees​
        // ไม่ หยุดการทำงานของสคริปต์; สคริปต์จะดำเนินการต่อหลังจากแสดงข้อมูล
        // var_dump($employees);

        // print_r() แสดงข้อมูลแบบ Array
        // แสดงข้อมูลของตัวแปร $employees​
        // ไม่ หยุดการทำงานของสคริปต์; สคริปต์จะดำเนินการต่อหลังจากแสดงข้อมูล
        // echo "<pre>";
        // print_r($employees);
        // echo "</pre>";

        //  JSON Response
        return response()->json($employees);

        // Log
        // Log::info('Employees:', $employees->toArray());

        return "OK จบการทำงาน";
    }

    public function employeelist(){

        // อ่านข้อมูลทั้งหมด จากตาราง employees
        $employees = Employee::all(); // select * from employees

        // อ่านข้อมูลรายการเดียว จากตาราง employees
        $employees = Employee::first(); // select * from employees limit 1

        // อ่านข้อมูลพนักงานที่มี id = 3
        $employees = Employee::find(3); // select * from employees where id = 3

        // อ่านข้อมูลพนักงานที่มี id = 3 และ name = 'John'
        $employees = Employee::where('id', 3)->where('fullname', 'Michael Smith')->first(); // select * from employees where id = 3 and fullname = 'John'

        // อ่านข้อมูลพนักงานที่มี id = 3 หรือ name = 'John'
        $employees = Employee::where('id', 3)->orWhere('fullname', 'Michael Wong')->first(); // select * from employees where id = 3 or fullname = 'John'

         // อ่านข้อมูลพนักงานที่มี id = 3 และ name = 'John'
         $employees = Employee::where([
            ['id', 3],
            ['fullname', 'Michael Smith']
        ])->first();

        // orderBy
        $employees = Employee::orderBy('id', 'desc')->get(); // แสดงข้อมูลจากตาราง employees โดยเรียงลำดับจากมากไปน้อย

        // limit และ offset
        $employees = Employee::skip(1)->take(2)->get(); // แสดงข้อมูลที่ 2 และ 3 จากตาราง employees

        // like
        $employees = Employee::where('fullname', 'like', '%John%')->get(); // แสดงข้อมูลที่มีชื่อ John จากตาราง employees

        // select
        $employees = Employee::select('id', 'fullname')->get(); // แสดงข้อมูลเฉพาะ id และ fullname จากตาราง employees

        // between
        $employees = Employee::whereBetween('id', [1, 3])->get(); // แสดงข้อมูลที่มี id ระหว่าง 1 ถึง 3 จากตาราง employees

        // min, max, avg, sum
        $employees = Employee::min('age');  // แสดงอายุน้อยที่สุดจากตาราง employees
        $employees = Employee::max('age');  // แสดงอายุมากที่สุดจากตาราง employees
        $employees = Employee::avg('age');  // แสดงอายุเฉลี่ยจากตาราง employees
        $employees = Employee::sum('age');  // แสดงผลรวมอายุจากตาราง employees

        // อ่านข้อมูลพนักงานทั้งหมด
        $employees = Employee::all();

        //  JSON Response
        // return response()->json($employees);

        // return "OK จบการทำงาน";

        // print_r(compact('employees'));

        // Return View
        return view('employees', compact('employees'));
    }

    // ฟังก์ชันสำหรับแสดงฟอร์มสำหรับเพิ่มข้อมูลพนักงาน
    public function create()
    {
        return view('create_employee');
    }

    // ฟังก์ชันสำหรับบันทึกข้อมูลพนักงาน
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            // 'tel' => 'required|string|max:20',
            'age' => 'required|integer|min:18|max:100',
            'gender' => 'required|in:male,female,other',
            // 'address' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ], [
            'fullname.required' => 'กรุณากรอกชื่อ-นามสกุล',
            'email.required' => 'กรุณากรอกอีเมล',
            'email.email' => 'รูปแบบอีเมลไม่ถูกต้อง',
            'email.unique' => 'อีเมลนี้มีอยู่ในระบบแล้ว',
            // 'tel.required' => 'กรุณากรอกเบอร์โทรศัพท์',
            'age.required' => 'กรุณากรอกอายุ',
            'age.integer' => 'กรุณากรอกอายุเป็นตัวเลขเท่านั้น',
            'age.min' => 'อายุต้องมากกว่าหรือเท่ากับ 18 ปี',
            'age.max' => 'อายุต้องน้อยกว่าหรือเท่ากับ 100 ปี',
            'gender.required' => 'กรุณาเลือกเพศ',
            // 'address.string' => 'กรุณากรอกที่อยู่',
            'avatar.image' => 'กรุณาเลือกไฟล์รูปภาพ',
            'avatar.mimes' => 'ไฟล์รูปภาพต้องเป็นไฟล์ประเภท jpeg, png, jpg หรือ gif',
            'avatar.max' => 'ไฟล์รูปภาพต้องมีขนาดไม่เกิน 2 MB'
        ]);

        try{

            $avatarPath = null;

            if ($request->hasFile('avatar')) {
                $avatarPath = $request->file('avatar')->store('avatars', 'public');
            }

            // Create new employee
            $employee = new Employee();
            $employee->fullname = $request->fullname;
            $employee->email = $request->email;
            $employee->tel = $request->tel;
            $employee->age = $request->age;
            $employee->gender = $request->gender;
            $employee->address = $request->address;
            $employee->avatar = $avatarPath;
            $employee->save();

            return redirect()->route('employees.employeelist')
                           ->with('success', 'Employee created successfully');

        } catch (\Exception $e) {
            Log::error('Error creating employee: ' . $e->getMessage());
            return back()->with('error', 'Error creating employee');
        }
    }
}
