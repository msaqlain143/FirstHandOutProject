<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Http\Request;

class facultyController extends Controller
{
    public function index(){

        $data=Faculty::get();

        return view('admin.Faculty.index',compact('data'));
    }
    public function create()
    {
        return view('admin.Faculty.create');
    }
    public function edit($id){
        $data=Faculty::find($id);
        return view('admin.Faculty.edit',compact('data'));
    }
    public function update(Request $request , $id){



        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'address' => 'required',
        //     "qualification" => 'required',
        //     'desigination' => 'required',
        //     'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000000',
        //     'experience' => 'required',
        //     'file' => 'nullable|mimes:pdf,docx,ppt|max:1000000'
        // ]);


        Faculty::where('id' , $id)->update([

            "name" => request('name'),
            "email" => request('email'),
            "address" => request('address'),
            "qualification" => request('qualification'),
            "desigination" => request('desigination'),
            "experience" => request('experience'),
        ]);


        return redirect(route('faculty-home'))->with('message','Faculty Updated Successfully!!');
    }

    public function show($id){
        // return Student::all();
        $faculty=Faculty::find($id);

        return view('admin.Faculty.show',compact('faculty'));
    }
    public function delete($id){
        Faculty::destroy($id);
        return redirect(route('faculty-home'))->with('message','Faculty record Deleted Successfully !!');
    }
    public function store(Request $request)
   {
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'address' => 'required',
        'qualification' => 'required',
        'desigination' => 'required',
        'file' => 'nullable|mimes:pdf,docx,ppt|max:10000000',
        'experience' => 'required',
        'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000000'



    ]);

     if(request()->hasFile('file') && request()->hasFile('image')){

        $pathcv  = "FacultyDocuments/cv/";
        $pathimages  = "FacultyDocuments/images/";

       $file =  request()->file('file');
       $filename = $file->getClientOriginalName();


       $fname =  $pathcv .  $filename;
       $file->move( $pathcv , $fname);

       $image =  request()->file('image');
       $imagename = $image->getClientOriginalName();

       $imgname = $pathimages .  $imagename;
       $image->move($pathimages , $imgname);
            Faculty::create([
            "name" => request('name'),
            "email" => request('email'),
            "address" => request('address'),
            "qualification" => request('qualification'),
            "desigination" => request('desigination'),
            "file" => $fname,
            "experience" => request('experience'),
            "image" =>  $imgname,

           ]);

     return redirect(route('faculty-home'))->with('message' , 'Faculty  Added Succesfully');

    }


}
}
