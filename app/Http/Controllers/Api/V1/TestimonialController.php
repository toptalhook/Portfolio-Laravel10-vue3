<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function get_all_testimonial()
    {
        $testimonials = Testimonial::orderBy('id','DESC')->get();

        return response()->json([
           'testimonials' => $testimonials
        ],200);
    }
}
