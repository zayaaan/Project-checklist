<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $locations = Location::orderBy('created_at', 'desc')->get();
        return view('admin.location', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        request()->validate([

            'location_name' => ['required']
        ]);

        $name = request('location_name');
        $url = request('image');
        //getting the extension of the image
        $extension = pathinfo($url, PATHINFO_EXTENSION);
        //appending the file name with the extension
        $filename = $name.'.'. $extension;
        //downloading the image file
        $file = file_get_contents($url);
        //saves the file in the path specified
        $save = file_put_contents(public_path().'/img/'.$filename, $file);
        //getting the full file path to commit it to the db
        $fullfilepath ='/img/'.$filename;

     
        $location = new Location();
        $location->location_name = $name;
        $location->image = $fullfilepath;

        $location->save();
        return redirect('/location')->with('message', 'Task added successfully!');

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
        $locations = Location::find($location);
        return view('location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //

        request()->validate([

            'location_name' => ['required']
 
        ]);

        $location = Location::find($location)->first();

        //$location->name = request('location_name');
        $name = request('location_name');
        $url = request('image');
        //getting the extension of the image
        $extension = pathinfo($url, PATHINFO_EXTENSION);
        //appending the file name with the extension
        $filename = $name.'.'. $extension;
        //downloading the image file
        $file = file_get_contents($url);
        //saves the file in the path specified
        $save = file_put_contents(public_path().'/img/'.$filename, $file);
        //getting the full file path to commit it to the db
        $fullfilepath ='/img/'.$filename;

        $location->location_name = $name;
        $location->image = $fullfilepath;

        $location->save();
        return redirect('/location');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
      
        $location->delete();
        return redirect('/location');
    }
}