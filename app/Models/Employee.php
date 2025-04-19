<?php

namespace App\Models;

// Trait คือ คลาสที่ใช้ในการเพิ่ม Method ให้กับคลาสอื่นๆ
// โดยไม่ต้องสืบทอดคลาสนั้นๆ
// ในที่นี้เราใช้ Trait ชื่อ HasFactory
// โดยเราสามารถเรียกใช้ Method ที่อยู่ใน HasFactory ได้
// โดยไม่ต้องสืบทอดคลาส HasFactory
// และไม่ต้องสร้างอ็อบเจ็กต์ของ HasFactory

// แล้ว HastFactory ทำอะไร?
// มันทำให้เราสามารถสร้างข้อมูลในฐานข้อมูลได้ง่ายขึ้น
// โดยเราสามารถเรียก Method factory() ได้
// โดยไม่ต้องสร้างอ็อบเจ็กต์ของ Factory
// และไม่ต้องสืบทอดคลาส Factory

use Illuminate\Database\Eloquent\Factories\HasFactory; // เรียกใช้ Trait ชื่อ HasFactory
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory; // เรียกใช้ Trait ชื่อ HasFactory
    protected $table = 'employees'; // กำหนดชื่อตารางให้กับ Model
    protected $primaryKey = 'id'; // กำหนด Primary Key ให้กับ Model
    public $timestamps = false; // กำหนดให้ไม่มีฟิลด์ created_at และ updated_at
    protected $fillable = ['fullname','gender', 'email', 'age', 'tel', 'address', 'avatar']; // กำหนดให้สามารถเพิ่มข้อมูลในฟิลด์ดังกล่าวได้
}
