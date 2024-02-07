<?php

namespace App\Http\Controllers;

use App\Models\school;
use App\Http\Requests\StoreschoolRequest;
use App\Http\Requests\UpdateschoolRequest;
use Illuminate\Support\Facades\DB;

class schoolController extends Controller
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
        $schools = DB::table('schools')->get();
        return view('schools.schools', ['schools' => $schools]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreschoolRequest $request)
    {
        $schools = school::create($request->all());
        $schools->save();
        /* return back()->with('message', 'school created successfully.'); */
        return redirect()->route('schools.index')->with('message', 'School created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(school $schools)
    {
        $sid = $schools->id;
        $schools = DB::table('schools')->where('id', $sid)->get();
        return view('schools.show', ['schools' => $schools]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(school $schools)
    {
        $sid = $schools->id;
        $schools = DB::table('schools')->where('id', $sid)->get();
        return view('schools.edit', ['schools' => $schools]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateschoolRequest $request, school $schools)
    {
        $schools->update($request->all());
        $schools->update();

        return redirect()->route('schools.index')->with('message', 'school updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $schools)
    {
        $schools->delete();
        return back()->with('message', $schools->name . ' was deleted Successfully');
    }
}
