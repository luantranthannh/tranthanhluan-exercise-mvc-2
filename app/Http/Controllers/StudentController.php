<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Hiển thị danh sách sinh viên.
     *
     * @return \Illuminate\Http\Response
     */
    public function getStudents()
    {
        $students = Student::all();
        return $students;
      
    }
    public function showStudents(){
        $students = Student::all();
        return view('students', ['students' => $students]);
    }
    public function getStudentById($id){
        $student = Student::find($id);
        if($student){
            return $student;
        }
        else{
            return "Student not found";
        }
    }
}