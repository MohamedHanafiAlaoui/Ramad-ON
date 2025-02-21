<?php

namespace App\Http\Controllers;

use App\Models\commentaires;
use Illuminate\Http\Request;

class CommentairesController extends Controller
{
  
    public function index()
    {
        $Commentaires=Commentaires::all();
        return view('Commentaires',compact('Commentaires'));
    }

   
}
