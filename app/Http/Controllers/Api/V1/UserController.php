<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get_all_users()
    {
        $users = User::orderBy('id','DESC')->get();

        return response()->json([
           'users'=>$users
        ]);
    }
}
