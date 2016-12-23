<?php

namespace App\Http\Controllers;

use App\film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilmoviController extends Controller
{
    public function index()
	{
		$filmovi = film::orderBy('created_at', 'asc')->get();
	
		return view('filmovi.index', ['filmovi'=> $filmovi]);
	}
}
