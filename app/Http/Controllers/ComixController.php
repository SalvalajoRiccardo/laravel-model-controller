<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComixController extends Controller
{
    public function comics() {

        // $comics = config('comics'); controller
        $comics = Comic::all();
        $data = ['fumetti' => $comics];
    
     return view('comics', $data);
    }

    public function detail($id) {

        $comics = Comic::all();
        $data = ['fumetto' => $comics[$id]];
    
     return view('detail', $data);
    }
}
