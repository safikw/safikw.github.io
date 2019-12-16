<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feedback;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
	public function index(){
		$data_feedback = \App\feedback::all();
		$data_feedback = DB::table('feedback')->orderBy('created_at', 'desc')->paginate(5);
		return view('data_point', ['data_feedback' => $data_feedback]);

	}

    function save(Request $req){
    	$feed = new feedback;
    	$feed->deskripsi = $req->deskripsi;
    	$feed->rate = $req->rate;
    	
    	echo $feed->save();
    	return redirect('/feedback');
    }
}
