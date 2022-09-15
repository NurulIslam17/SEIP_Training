<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public  function  addStudent( Request $request)
    {
//        return $request->file('image');
//        exit();


        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->roll = $request->roll;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->image = $this->saveImage($request);

        $student->save();
        return redirect()->back()->with('Msg','Data Inserted Successfully');
    }

    private function saveImage($request)
    {
        $image = $request->file('image');
        $imageName = rand(). ' . '.$image->getClientOriginalExtension();
        $imageDir = 'adminAssets/student_image/';
        $imgUrl = $imageDir.$imageName;
        $image->move($imageDir,$imageName);
        return $imgUrl;

    }

    public function studentDelete(Request $request)
    {
        $data = Student::find($request->student_id);

        if(file_exists($data->image))
        {
            unlink($data->image);
        }

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

        if($request->file('image'))
        {

            if($student->image)
            {
                unlink($student->image);
                $student->image = $this->saveImage($request);
            }else{
                $student->image = $this->saveImage($request);
            }
        }

        $student->save();

        return redirect('/home');

    }


}
