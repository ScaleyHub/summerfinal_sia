<?php

namespace App\Http\Controllers;

use App\Models\Guitar;
use Illuminate\Http\Request;

class GuitarController extends Controller
{
 public function index(){
    
    $guitars = Guitar::with('descriptions')->get();

        return inertia('Guitar',[
            'guitars' => $guitars
        ]);

 }
}
