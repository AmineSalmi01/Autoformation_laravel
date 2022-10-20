<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListApprenant;

class ApprenantsController extends Controller
{
    // public function show(){
    //     return view('index');
    // }

    public function select(){
        $data = ListApprenant::all();
        return view('index', compact('data'));
    }


    public function insertData(Request $request){
        $obj_models = new ListApprenant();
        $obj_models->name = $request->input;
        $obj_models->save();
        return redirect('Save_page');
    }

    // public function addId($name){
    //     $data = [
    //         'amine'=>'amine',
    //         'mohamed'=>'mohamed'
    //     ];
    //     return view('index', [
    //         'apprenants' => $data[$name]
    //     ]);
    // }
}
