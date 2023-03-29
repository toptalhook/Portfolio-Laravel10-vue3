<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function get_all_experiences()
    {
        $experiences = Experience::orderBy('id', 'DESC')->get();

        return response()->json([
           'experiences' => $experiences
        ]);
    }
}
