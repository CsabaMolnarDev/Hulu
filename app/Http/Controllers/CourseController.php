<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use DB;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = DB::table('courses')->get();
        return view('courses.courses', ['course' => $course]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $request->picture->storeAs(
            'courses_picture',
            'courses_Img_' . $request->name,
            'public'
        );

        $fileName = 'courses_Img_' . $request->name;

        $course = Course::create($request->all());
        $course->picture = $fileName;
        $course->save();
        /* return back()->with('message', 'Course created successfully.'); */
        return redirect()->route('courses.index')->with('message', 'Course created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $cid = $course->id;
        $course = DB::table('courses')->where('id', $cid)->get();
        return view('courses.show', ['course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $cid = $course->id;
        $course = DB::table('courses')->where('id', $cid)->get();
        return view('courses.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->all());
        if ($request->picture != null) {
            //Fájlnév kimentése
            $fileName = 'course_Img_' . $request->name;
            $course->picture = $fileName;

            //A fájl feltöltése
            $request->picture->storeAs(
                'course_pictures',
                'course_Img_' . $request->name,
                'public'
            );
            $course->update();
        }
        return redirect()->route('courses.index')->with('message', 'Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return back()->with('message', $course->name . ' was deleted Successfully');
    }
}
