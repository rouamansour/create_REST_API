<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\participant;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $participants = participant::all()->toArray();
        return array_reverse($participants);
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
        $participant = new participant([
            "num_passeport" => $request->input('num_passeport'),
            "nom" => $request->input('nom'),
            "prenom" => $request->input('prenom'),
            "pays" => $request->input('pays'),
            "tel" => $request->input('tel'),
            "email" => $request->input('email'),
            "date_naiss" => $request->input('date_naiss'),
            "date_inscription" => $request->input('date_inscription'),
            "reference_vehicule" => $request->input('reference_vehicule'),
            "rang" => $request->input('rang'),
            ]);
            $participant->save();
            return response()->json('participant créé !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $participant = participant::find($id);
        return response()->json($participant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $participant = participant::find($id);
        $participant->update($request->all());
        return response()->json('participant MAJ !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $participant = participant::find($id);
        $participant->delete();
        return response()->json('participant supprimé !');
    }
}
