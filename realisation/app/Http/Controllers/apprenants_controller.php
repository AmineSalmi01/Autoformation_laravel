<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;

class apprenants_controller extends Controller
{
    public function form_page($id){
        $id_promotion = $id;
        return view('edit', compact('id_promotion'));
    }

    public function Add_apprenants(Request $request){
        
        $add_apprenants = new Apprenant();
        $add_apprenants->prenom = $request->prenom;
        $add_apprenants->nom = $request->nom;
        $add_apprenants->email = $request->email;
        $add_apprenants->id_promotion = $request->id_promotion;
        $add_apprenants->save();
        redirect('edit');
        
    }
}
