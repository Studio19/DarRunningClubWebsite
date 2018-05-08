<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Races;
use App\achievements;
use App\Runs;

class RaceController extends Controller
{
    //
    public function index()
    {
    	$races = Races::all();
    	$achievements = achievements::first();
    	$runs = Runs::all();

    	//dd($runs);

    	return view('index')->with('races',$races)->with('runs',$runs)->with('achievements',$achievements);
    }

     public function marathons()
    {
    	$races = Races::all();
    	$achievements = Achievements::first();
    	$runs = Runs::all();

    	//dd($runs);

    	return view('races')->with('races',$races)->with('runs',$runs)->with('achievements',$achievements);
    }
}
