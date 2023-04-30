<?php

namespace App\Http\Controllers;
use App\Models\Ville;
use App\Models\Etudiant;
use App\Models\Category;
use App\Models\Repertoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EtudiantController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();

        return view('etudiant.index', ['etudiants' => $etudiants]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Etudiant $etudiant)
    {
        $categories = Category::categorySelect();
     
        $villes = Ville::all();
        return view('etudiant.create',['categories' => $categories], compact('etudiant', 'villes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $etudiant = Etudiant::create([
            'name' => $request->name,
            'adresse' => $request->adresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'date_de_naissance' => $request->date_de_naissance,
            'ville_id' => $request->ville_id,
            'user_id' => Auth::user()->id,
            'categories_id' => $request->categories_id
       ]);

    return redirect(route('etudiant.show', $etudiant->id))->withSuccess('Post inserted');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        return view('etudiant.show',['etudiant'=>$etudiant]);
       // return view('etudiant.show', compact('etudiant'));
       //return $etudiant;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $categories = Category::categorySelect();

        $villes = Ville::all();
        return view('etudiant.edit', ['etudiant'=>$etudiant, 'villes' =>$villes, 'categories' => $categories]);
        //return view('etudiant.edit', compact('etudiant', 'villes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->update([
            'name' => $request->name,
            'adresse' => $request->adresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'date_de_naissance' => $request->date_de_naissance,
            'ville_id' => $request->ville_id,
            'categories_id' => $request->categories_id

        ]);

        $etudiant->ville_id = $request->input('ville_id');
        $etudiant->save();
    
        return redirect()->route('etudiant.show', $etudiant)->withSuccess('Etudiant updated successfully.');
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
        return redirect(route('etudiant.index'))->withSuccess('etudiant Deleted');
    }

    // public function query() {
    //     return $etudiant;
    // }

    public function page(){
        $etudiants = Etudiant::select()
        ->paginate(5);

        return view('etudiant.page', ['etudiants' => $etudiants ]);

    }
}
