<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestFormController extends Controller
{
    public function getInfos(){
        return view('monFormulaire');
    }

    public function postInfos(Request $request){
        return 'Le message soumis dans la zone de texte est : '.$request->input('message');
    }
}
