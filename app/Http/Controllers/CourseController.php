<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        //
        $courses=Course::paginate(5);
        return view('courses.index',compact('courses'));
    }

    public function create()
    {
        //
        return view('courses.create');
    }
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|unique:courses|min:2',
            'description'=>'required|unique:courses|min:10|max:100',
            'totalGrade' => 'integer|min:0|max:100'
        ]);

        Course::create($validatedData);
        return to_route('courses.index');
    }

    public function show(Course $course)
    {
        return view('courses.show',compact('course'));
    }

    public function edit(Course $course)
    {
        //
        return view('courses.edit',compact('course'));
    }

    public function update(Request $request, Course $course)
        {
            $validatedData = $request->validate([
                'name'=>'required:courses|min:2',
                'description'=>'required|min:10|max:500',
                'totalGrade' => 'required|min:0|max:100',
            ]);


            $course->update($validatedData);
            return to_route('courses.index');
        }

        
    public function destroy(Course $course) 
    {
        //
        $course->delete();
        return to_route('courses.index');
    }
}
