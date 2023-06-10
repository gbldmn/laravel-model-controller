<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $title = 'pagina home';

        // phpInfo();

        $movie = Movie::all();


        return view('welcome', compact('title','movie'));
    }
}
