<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Visit;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visites = Visit::all()->count();
        $programmes = Program::all()->count();
        return view('home')->with(array('visites'=>$visites, 'programmes'=>$programmes ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programmes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'city' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
        ]);
      
        $input = $request->all();
        $program = Program::create($input);
        return redirect()->route('home')
        ->with('success','Program created successfully');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        //
    }
    
    public function getData(Request $request)
    {
                
        // Short-circuit if the client did not give us a date range.
        if (!isset($_GET['start']) || !isset($_GET['end'])) {
            die("Please provide a date range.");
        }
        
        // Parse the start/end parameters.
        // These are assumed to be ISO8601 strings with no time nor timeZone, like "2013-12-29".
        // Since no timeZone will be present, they will parsed as UTC.
        $range_start = date_parse_from_format ('Y-m-d H:i:s', $_GET['start']);
        $range_end = date_parse_from_format ('Y-m-d H:i:s', $_GET['end']);

        
        
        // Parse the timeZone parameter if it is present.
        $time_zone = null;
        if (isset($_GET['timeZone'])) {
            $time_zone = new DateTimeZone($_GET['timeZone']);
        }
        
        
        // Read and parse our events JSON file into an array of event data arrays.

        $json = Program::Select('day', 'time_start', 'time_end', 'name', 'city')->get();
        if(!empty($json)){
            $json->toArray();
        }
        $output_arrays = [];
        foreach($json as $key => $js)
        {
            $output_arrays[] = [ 'title'=> $js->name, 'start'=> $js->day.'T'.$js->time_start, 'end'=> $js->day.'T'.$js->time_end];
        }
                        
        // Send JSON to the client.
        echo json_encode($output_arrays);
    }

    public function seeBoard()
    {
        // Nous allons selctionner toutes les disponibilités enregistrées dans l'interval du programme
        return view('programmes.see_schedule');
    }

}
