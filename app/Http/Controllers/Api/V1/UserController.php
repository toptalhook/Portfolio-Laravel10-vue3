<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function get_all_users()
    {
        $users = User::orderBy('id','DESC')->get();

        return response()->json([
           'users'=>$users
        ]);
    }

    public function create_user(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2|max:50',
            'email' => 'required|email',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->type = $request->type;
        $user->bio = $request->bio;
        $user->email = $request->email;
        $user->password =Hash::make($request->password);
        if ($request->photo) {
            $strpos = strpos($request->photo, ';');
            $sub = substr($request->photo, 0, $strpos);
            $ex = explode('/', $sub)[1];
            $name = time() . "." . $ex;
            $upload_path = public_path() . "/img/upload/";
            $img = Image::make($request->photo)->resize(700, 500);
            $image = $upload_path . $user->photo;
            $img->save($upload_path . $name);
            if (file_exists($image)) {
                @unlink($image);
            }
        } else {
            $name = $user->photo;
        }
        $user->photo = $name;
        $user->save();

    }
}
