<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function get_all_educations()
    {
        $educations =Education::orderBy('id','DESC')->get();

        return response()->json([
           'educations' => $educations
        ],200);
    }
}
