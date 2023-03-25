<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function get_all_skills()
    {
        $skills = Skill::with('service')->orderBy('id','DESC')->get();
        return response()->json([
            'skills' =>$skills
        ]);
    }

    public function create_skill(Request $request)
    {
        $skill = new Skill();
        $skill->name = $request->name;
        $skill->proficiency = $request->proficiency;
        $skill->service_id = $request->service_id;
        $skill->save();
    }
}
