<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentTrackController extends Controller
{
    //
    public function assignTrack(Request $request , Student $student)
    {
        $trackId = $request->input('track_id');
        $student->track_id = $trackId ;
        $student->save();
        return response()->jason(['message' => 'Track assigned successfully to the students'],200);
    }

    public function removeTrack(Studeent $student)
    {
        $student->track_id = null ;
        $student->save();

        return response()->jason(['message','Track removed from the student'],200);
    }
}
