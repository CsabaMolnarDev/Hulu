<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function isUsedResponse(Request $request){
        $userTaken = User::all()->where('username',$_POST['inputValue'])->count();
        if($userTaken !== 0)
        {
            return response()->json([
                'status' => 'failed',
                'message' => 'Already taken'
            ]);
        }
    }
}
