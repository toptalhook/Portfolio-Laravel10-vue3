<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function get_all_project()
    {
        $projects = Project::orderBy('id','DESC')->get();

        return response()->json([
            'projects' => $projects
        ]);
   }
}
