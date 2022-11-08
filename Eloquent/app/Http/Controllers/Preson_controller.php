<?php

namespace App\Http\Controllers;

use App\Models\persone;
use Illuminate\Http\Request;

class Preson_controller extends Controller
{
    public function Show_person(){
        $person = persone::all();

        return view('persone', compact('person'));
    }
}
