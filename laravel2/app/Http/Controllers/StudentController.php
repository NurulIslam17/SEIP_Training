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
        $student->phone = $request->phone;

        $student->save();
        return redirect()->back()->with('Msg','Data Inserted Successfully');
    }

    public function studentDelete(Request $request)
    {
        $data = Student::find($request->student_id);
        $data->delete();
        return redirect()->back()->with('dltMsg','Information Deleted Successfully');
    }
    public  function studentEdit($id)
    {
        return view('edit',
        [
            'editStudent' => Student::find($id),
            'students'=>Student::all()
        ]
        );

    }

    public  function  updateEdit(Request $request)
    {

        $student = Student::find($request->update_id);

        $student->first_name    = $request->first_name;
        $student->last_name     = $request->last_name;
        $student->roll          = $request->roll;
        $student->email         = $request->email;
        $student->phone         = $request->phone;

        $student->save();

        return redirect('/home');

    }
}
