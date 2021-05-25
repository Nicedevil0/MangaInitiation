<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dessinateur;

class DessinateurController extends Controller
{
    //provide data to the home page.
    public function dessinateurs()
    {
        $dessinateur = new Dessinateur();
        $dessinateurs = $dessinateur->getAll();
        return view('dessinateurs',compact('dessinateurs'));
    }
}
