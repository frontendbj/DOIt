<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programmes.visit');
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
            'timme_start' => 'required',
            'timme_end' => 'required',
        ]);
        $input = $request->all();

        if (Programme::Where([['name','=',$input['name']], ['day','=',$input['day']],['time_start','<=',$input['timme_start']],['time_end','>=',$input['timme_end']] ])->count() != 0) {
            return redirect()->route('home')->with('error','Désolé, aucun programme n\' a été programmé pour cette visite !');
        }
        $program = Visit::create($input);
        return redirect()->route('home')
        ->with('success','Program created successfully');
    }

    public function seeByClasse(Request $request, $id, $classe)
    {
        // Nous allons selctionner toutes les disponibilités enregistrées dans l'interval du programme
        $programme = Programme::find($id);
        session(['choose_class_id'=> $classe]); 
        return view('programmes.see_schedule', compact('programme'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function show(Visit $visit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function edit(Visit $visit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visit $visit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visit $visit)
    {
        //
    }
}
