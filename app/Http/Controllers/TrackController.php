<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Track; 

use Illuminate\Support\Facades\DB;

class TrackController extends Controller
{

    public function index()
    {
        $tracks = Track::paginate(5);
        return view('tracks.index', compact("tracks"));
    }


    public function create()
    {
        //
        return view('tracks.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|unique:tracks|min:2',
            'hours'=>'required|',
        ]);
        Track::create($validatedData);
        return to_route('tracks.index');
    }

    function show($id)
    {
        $track = Track::find($id);
        return view('tracks.show', compact("track"));
    }

    public function edit(Track $track)
    {
        //
        return view('tracks.edit',compact('track'));
    }

    public function update(Request $request, Track $track)
        {
            $validatedData = $request->validate([
                'name'=>'required|unique:tracks|min:2',
                'hours'=>'required|',
            ]);


            $track->update($validatedData);
            return to_route('tracks.index');
        }

        public function destroy(Track $track) 
        {
            //
            $track->delete();
            return to_route('tracks.index');
        }

}
