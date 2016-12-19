<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\TeamUser;
use App\Tuser;

class TeamCtrl extends Controller
{
    public function index($value='')
    {
    	$data=array();
    	// $teams=Team::with('teamuser_team.get_users')->get();
    	$teams=Tuser::with('teamuser_user.get_teams')->get();
    	// dd($teams);
    	// $data['teams']=$teams;
    	// // echo 'mac';

    	// return view('teamusers',$data);
    	return view('teamusers',compact('teams'));
    }
}
