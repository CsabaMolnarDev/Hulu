<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AboutUs extends Controller
{
    public function index()
    {
        // get users that are devs by role id
        $devs = DB::table('users')->where('roles_id','1')->get();
        return view('includes.about_us', ['devs' => $devs]);
    }
}
