<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    public function get_all_testimonial()
    {
        $testimonials = Testimonial::orderBy('id','DESC')->get();

        return response()->json([
           'testimonials' => $testimonials
        ],200);
    }

    public function create_testimonial(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->function = $request->function;
        $testimonial->testimony = $request->testimony;
        $testimonial->rating = $request->rating;
        if ($request->photo) {
            $strpos = strpos($request->photo, ';');
            $sub = substr($request->photo, 0, $strpos);
            $ex = explode('/', $sub)[1];
            $name = time() . "." . $ex;
            $upload_path = public_path() . "/img/upload/";
            $img = Image::make($request->photo)->resize(700, 500);
            $image = $upload_path . $testimonial->photo;
            $img->save($upload_path . $name);
            if (file_exists($image)) {
                @unlink($image);
            }
        } else {
            $name = $testimonial->photo;
        }
        $testimonial->photo = $name;
        $testimonial->save();
    }

    public function get_edit_testimonial($id)
    {
        $testimonial = Testimonial::find($id);

        return response()->json([
            'testimonial'=>$testimonial
        ]);

    }

    public function update_testimonial(Request $request , $id)
    {
        $testimonial = Testimonial::find($id);

        $testimonial->name = $request->name;
        $testimonial->function = $request->function;
        $testimonial->testimony = $request->testimony;
        $testimonial->rating = $request->rating;
        if ($testimonial->photo !== $request->photo) {
            $strpos = strpos($request->photo, ';');
            $sub = substr($request->photo, 0, $strpos);
            $ex = explode('/', $sub)[1];
            $name = time() . "." . $ex;
            $upload_path = public_path() . "/img/upload/";
            $img = Image::make($request->photo)->resize(700, 500);
            $image = $upload_path . $testimonial->photo;
            $img->save($upload_path . $name);
            if (file_exists($image)) {
                @unlink($image);
            }
        } else {
            $name = $testimonial->photo;
        }
        $testimonial->photo = $name;
        $testimonial->save();
    }
}
