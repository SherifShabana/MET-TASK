<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function index()
    {
        $lists = Student::all();
        return view('display', compact('lists'));
    }

    public function result(){
         return view('creation');
    }

    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required',
            'age' => 'required|integer',
            'address' => 'nullable',
        ]);

        Student::create($data);
        return redirect() ->route('home');
    }

    
    public function show(Student $id){
        return view('show',compact('id'));
    }

     public function update(Request $request, Student $stud)
    {
        $data = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:students,email,' . $stud->id,
            'phone' => 'required|digits:11|unique:students,phone,' . $stud->id,
            'age' => 'required|integer',
            'address' => 'nullable',
        ]);

        $stud->update($data);
        return view('edit',compact('stud'));
    }

     public function destroy($id)
    {
        Student::destroy($id);
        $lists = Student::all();
        return view('display', compact('lists'));
    }

}
