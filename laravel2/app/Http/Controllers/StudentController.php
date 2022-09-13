<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public  function  addStudent( Request $request)
    {
        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->roll = $request->roll;
        $student->email = $request->email;
        $student->phn = $request->phn;

        $student->save();
        return redirect()->back()->with('Msg','Data Inserted Successfully');
    }
}
