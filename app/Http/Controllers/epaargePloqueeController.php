<?php

namespace App\Http\Controllers;

use App\Models\EpargenePloquee;
use Illuminate\Http\Request;

class epaargePloqueeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eparnebloquees = EpargenePloquee::all();

        return view('epargneploque.epargnebloquees',compact('eparnebloquees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$eparnebloquees = EpargenePloquee::all();

        return view('epargneploque.epargnebloquee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $type_epargne = $request['type_epargne'];
        $mode_de_contriution = $request['mode_de_contriution'];
        $duree = $request['duree'];
        $montant_de_la_contribution = $request['montant_de_la_contribution'];
        $data = $request->except('_token');
        if($type_epargne=="epargne quotidienne"){
            if($mode_de_contriution=="trimestriel"){
                $frais_de_gestion = 5100;
                $mont_g = $montant_de_la_contribution*$duree;
                $inte = $mont_g*0.02;
                $data['montant_du_gain'] = $montant_de_la_contribution*$duree;
                $montant_interet =$inte;
                $data['montant_gain']= $mont_g+$inte;
                $data['montant_net_gain']= $mont_g-$frais_de_gestion;
                EpargenePloquee::create($data);
            }




        }


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
