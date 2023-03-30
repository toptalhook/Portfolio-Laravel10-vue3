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

    public function create_experience(Request $request)
    {
        $this->validate($request,[
            'company'=>'required'
        ]);
        $experience = new Experience();
        $experience->company = $request->company;
        $experience->period = $request->period;
        $experience->position = $request->position;
        $experience->save();
    }

    public function update_experience(Request $request , $id)
    {
        $experience = Experience::find($id);
        $this->validate($request,[
            'company'=>'required'
        ]);
        $experience->company = $request->company;
        $experience->period = $request->period;
        $experience->position = $request->position;
        $experience->save();
    }

    public function delete_experience($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();
    }
}
