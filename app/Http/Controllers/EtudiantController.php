<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::select()
        ->paginate(20);
        return view('etudiant.index', ['etudiants'=>$etudiants]);
    }

    // public function page(){
    //     $blogPosts = BlogPost::select()
    //     ->paginate(5);
        
    //     return view('blog.page',['blogPosts'=>$blogPosts]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Ville::all();
        return view('etudiant.create', ['villes'=>$villes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $newEtudiant = Etudiant::create([
        //     'nom'=> $request->nom,
        //     'adresse'=> $request->adresse,
        //     'phone'=> $request->phone,
        //     'email'=> $request->email,
        //     'dateNaissance'=> $request->dateNaissance,
        //     'ville_id'=> $request->ville_id,
        // ]);

        // return redirect(route('etudiant.detail', $newEtudiant));


        $request->validate([
            'nom'=>'required',
            'adresse'=>'required',
            'phone'=>'required|numeric|digits:10',
            'email'=>'required|email|unique:etudiants',
            'dateNaissance'=>'required',
            'ville_id'=>'required'
         
        ]);

        

        $etudiant = new Etudiant;
        $etudiant->fill($request->all());
        $etudiant->save();

        return redirect()->back()->withSuccess('Etudiant inscrit, vous recevrez un courriel de confirmation prochainement!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        return view('etudiant.detail', ['etudiant'=>$etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $villes = Ville::all();
        return view('etudiant.edit', ['etudiant'=>$etudiant, 'villes'=>$villes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant, Ville $ville)
    {
        $etudiant->update([ //pas de nouvelle instanciation car le post existe deja :: ca ca instantie lol
            'nom'=> $request->nom,
            'adresse'=> $request->adresse,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'ville_id'=> $request->ville_id,
        ]);
        // $ville->update([ //pas de nouvelle instanciation car le post existe deja :: ca ca instantie lol
        //     'nom'=> $request->nom,

        // ]); a voir

        return redirect(route('etudiant.detail', $etudiant->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        
        return redirect(route('etudiant.index'));
    }
}
