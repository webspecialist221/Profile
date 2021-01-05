<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Auth;

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$activities = Activity::where('subject_id',Auth::user()->id)->get();
    	// dd($activities);
    	return view('activity',compact('activities'));
    	
    }
}
