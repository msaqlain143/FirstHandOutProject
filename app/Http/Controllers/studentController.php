<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class studentController extends Controller
{
public function index(){

    // return Student::all();
     $student =Student::get();


    return view('admin.Student.index',compact('student'));
}
public function create()
{
    return view('admin.Student.create');
}
public function edit($id){
    $data=Student::find($id);

    return view('admin.Student.edit',compact('data'));
}
public function show($id){
    // return Student::all();
    $student = Student::find($id);

    return view('admin.Student.show',compact('student'));
}

public function store(Request $request)
{     $request->validate([
        'name' => 'required',
        'fathername' => 'required',
        'email' => 'required',
        'qualification' => 'required',
        'file' => 'nullable|mimes:pdf,docx,ppt|max:10000000',
        'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000000'

    ]);

     if(request()->hasFile('file') && request()->hasFile('image')){

        $pathcv  = "StudentsDocuments/cv/";
        $pathimages  = "StudentsDocuments/images/";

       $file =  request()->file('file');
       $filename = $file->getClientOriginalName();


       $fname =  $pathcv .  $filename;
       $file->move( $pathcv , $fname);

       $image =  request()->file('image');
       $imagename = $image->getClientOriginalName();

       $imgname = $pathimages .  $imagename;
       $image->move($pathimages , $imgname);
            Student::create([
            "name" => request('name'),
            "fathername" => request('fathername'),
            "email" => request('email'),
            "address" => request('address'),
            "qualification" => request('qualification'),
            "file" => $fname,
            "image" =>  $imgname,

           ]);

           return view('admin.Student.index', [
            'student' => Student::all() ,
         ])->with('message' , 'User Added Succesfully');


     }

     return view('admin.Student.index', [
        'student' => Student::all() ,
     ])->with('message' , 'Their is an error!');


    }

public function delete($id){


    Student::destroy($id);
        return redirect(route('student-home'))->with('message' , 'student Deleted Successfully !!');


}
public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'fathername' => 'required',
            'email' => 'required',
            'qualification' => 'required',
            'file' => 'nullable|mimes:pdf,docx,ppt|max:10000000',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000000'



        ]);


        Student::where('id' , $id)->update([

            "name" => request('name'),
            "fathername" => request('fathername'),
            "email" => request('email'),
            "address" => request('address'),
            "qualification" => request('qualification'),
            "image" => request('image')
        ]);



        return redirect(route('student-home'))->with('message', 'Student Updated Successfully !!');

        //upload image
        // if (isset($request->image)) {
        //     $imageName = time() . '.' . $request->image->extension();
        //     $request->image->move(public_path('Students_pic'), $imageName);
        //     $student->image = $imageName;
        //     $request->file->move(public_path('Students_CV'), $imageName);
        //     $student->image = $imageName;
        // }
        // dd($imageName);

    }

}
