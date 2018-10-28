<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Lga;

class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::with('region')->get();
        return $states->toJson();
    }

    public function lgas($state_id)
    {
        $lgas = Lga::where('state_id', $state_id)->with('state', 'wards')->get();
        return $wards->toJson();
    }

    public function wards($lga_id)
    {
        $wards = Ward::where('lga_id', $lga_id)->with('lga', 'pollingunits')->get();
        return $wards->toJson();
    }

    
    public function pollingunits($ward_id)
    {
        $pus = PollingUnit::where('ward_id', $ward_id)->with('ward')->get();
        return $pus->toJson();
    }

   
}
