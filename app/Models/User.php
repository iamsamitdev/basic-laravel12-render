<?php

// Model User ใน Laravel ซึ่งใช้สำหรับจัดการข้อมูลผู้ใช้ในฐานข้อมูล โดยโมเดลนี้สืบทอดคุณสมบัติจากคลาส Authenticatable เพื่อรองรับระบบการยืนยันตัวตน (Authentication) ของ Laravel

// Namespace: กำหนดพื้นที่ชื่อของคลาสให้อยู่ภายใต้ App\Models ซึ่งเป็นมาตรฐานสำหรับโมเดลใน Laravel
namespace App\Models;


// use Statements: นำเข้า Traits และคลาสที่จำเป็นสำหรับโมเดลนี้:​

// HasFactory: ช่วยในการสร้างข้อมูลจำลอง (Factory) สำหรับการทดสอบหรือการตั้งค่าข้อมูลเริ่มต้น​
// Notifiable: ช่วยให้โมเดลสามารถรับการแจ้งเตือน (Notifications) ได้​
// Authenticatable: เป็นคลาสพื้นฐานสำหรับโมเดลที่ใช้ในการยืนยันตัวตนของผู้ใช้

// ใช้ Traits เพื่อเพิ่มความสามารถให้กับโมเดล
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// Class User: สืบทอดจาก Authenticatable เพื่อให้โมเดลนี้รองรับฟังก์ชันการยืนยันตัวตนของ Laravel​
class User extends Authenticatable
{
    // ใช้ Traits HasFactory และ Notifiable
    use HasFactory, Notifiable;

    /**
     * กำหนดแอตทริบิวต์ที่สามารถกำหนดค่าได้แบบกลุ่ม (Mass Assignable)
     *
     * @var array<int, string>
     */
    // $fillable: กำหนดแอตทริบิวต์ที่สามารถกำหนดค่าได้แบบกลุ่ม (Mass Assignment) เพื่อป้องกันปัญหา Mass Assignment Vulnerability
    protected $fillable = [
        'name',       // ชื่อของผู้ใช้
        'email',      // อีเมลของผู้ใช้
        'phone',      // เบอร์โทรศัพท์ของผู้ใช้
        'password',   // รหัสผ่านของผู้ใช้
        'address',    // ที่อยู่ของผู้ใช้
        'email_verified_at', // วันที่ยืนยันอีเมล
    ];

    /**
     * กำหนดแอตทริบิวต์ที่ควรถูกซ่อนเมื่อทำการซีเรียลไลซ์ (Serialization)
     *
     * @var array<int, string>
     */
    // $hidden: กำหนดแอตทริบิวต์ที่ควรถูกซ่อนเมื่อโมเดลถูกแปลงเป็นอาร์เรย์หรือ JSON เช่น เมื่อส่งข้อมูลผ่าน API
    protected $hidden = [
        'password',          // ซ่อนรหัสผ่าน
        'remember_token',    // ซ่อนโทเค็นสำหรับการจดจำการเข้าสู่ระบบ
    ];

    /**
     * กำหนดการแปลงประเภทของแอตทริบิวต์
     *
     * @var array<string, string>
     */
    // $casts: กำหนดการแปลงประเภทของแอตทริบิวต์เมื่อเข้าถึงหรือบันทึกค่า เช่น แปลง email_verified_at เป็นชนิด datetime และแปลง password เป็น hashed เพื่อความปลอดภัย
    protected $casts = [
        'email_verified_at' => 'datetime',  // แปลงวันที่ยืนยันอีเมลเป็นชนิด datetime
        'password' => 'hashed',             // แปลงรหัสผ่านเป็น hashed
    ];
}
