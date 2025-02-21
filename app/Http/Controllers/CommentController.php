<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request, $id)
    {



        $name = $request->input('name');
        $content = $request->input('content');




        Comment::create([
            'recipe_id' => $id,
            'content' => $content,
            'name' => $name,
        ]);


            return redirect()->back()->with('success', 'L\'expérience a été ajoutée avec succès.');

    }



    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
