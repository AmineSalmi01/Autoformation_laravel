<?php

namespace App\Http\Controllers;

use App\Models\persone;
use Illuminate\Http\Request;

class Preson_controller extends Controller
{
    public function Show_person(){
        $person = persone::where('id',1)->first();
        $person->Number;

        return view('persone', compact('person'));
    }
}
