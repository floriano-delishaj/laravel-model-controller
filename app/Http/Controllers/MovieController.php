<?php

namespace App\Http\Controllers;
use App\Movie;

use Illuminate\Http\Request;
use Prophecy\Doubler\Generator\Node\ArgumentNode;

class MovieController extends Controller
{
    public function index ()
    {
        $movies = Movie::all();

        return view('movies.home', compact('movies'));
    }

}
