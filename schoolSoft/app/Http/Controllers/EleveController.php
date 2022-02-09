<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index()
    {

        return view('index');
    }
    public function createEleve()
    {

        return view('createForm');
    }

    public function sauveEleve(Request $request)
    {
        // $post = Post::find(1);

        // $comment = $post->comments()->create([
        //     'message' => 'A new comment.',
        // ]);
        // dd($request->matricule);
        Eleve::create([
            
            'matricule' => $request->matricule,
            'civilite' => $request->civilite,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'tuteur_id' => 1
        ]);
        // $post = Post::find();
        return redirect('eleves');
        // return view('createForm');
    }

    public function mesEleves()
    {
        $eleves = Eleve::orderBy('nom')->get();

        return view('eleves', compact('eleves'));
    }

    public function detailEleve($id)
    {
        $eleve = Eleve::findOrFail($id);
        return view('detailEleve', compact('eleve'));
    }
}
