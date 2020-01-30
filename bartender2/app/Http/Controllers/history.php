<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class history extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historys = DB::table('commandes')
        ->join('boissons', 'commandes.boisson_id', '=', 'boissons.id')
        ->select('commandes.etat', 'boissons.nom', 'boissons.img_path', 'boissons.description')
        ->where('etat', '=', 'termine')
        ->orderBy('commandes.date_commande', 'desc')
        ->get();

        //$currentTime = new DateTime("Y-m-d H:i:s");
        //$dateDiff = $currentTime->diff(new DateTime($historys->date_commande));
        $dateDiff = '5 min';
        return view('history.history', ['historys' => $historys, 'dateDiff' => $dateDiff]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }
}
