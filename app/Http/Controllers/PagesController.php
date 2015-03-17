<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class PagesController extends Controller {

    public function about()
    {
        $name = 'Martin Parrag';
        
        $first = 'Martin';
        $last = 'Parrag';
        
//        return view('pages.about')->with('name', $name);

//        return view('pages.about')->with([
//            'first' => 'Martin',
//            'last' => 'Parrag'
//        ]);
        
        return view('pages.about', compact('first','last'));
        

    }

}
