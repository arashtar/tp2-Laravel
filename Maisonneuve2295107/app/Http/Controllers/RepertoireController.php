<?php

namespace App\Http\Controllers;

use App\Models\Repertoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class RepertoireController extends Controller   
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
        $repertoires = Repertoire::all();

        return view('repertoire.index', ['repertoires' => $repertoires]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('repertoire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        
        ]);
    
        $file_path = $request->file_path->store('public/files');
        echo $request->input('title_fr');
        $repertoire = Repertoire::create([
            'title' => $request->title,
            'title_fr' => $request->title_fr,
            'user_id' => Auth::user()->id,
            'file_path' => $file_path
        ]);
    
        return redirect(route('repertoire.show', $repertoire->id))->withSuccess('repertoire inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Repertoire  $repertoire
     * @return \Illuminate\Http\Response
     */
    public function show(Repertoire $repertoire)
    {
        return view('repertoire.show', ['repertoire' => $repertoire]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Repertoire  $repertoire
     * @return \Illuminate\Http\Response
     */
    public function edit(Repertoire $repertoire)
    {
        return view('repertoire.edit', ['repertoire' => $repertoire]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Repertoire  $repertoire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repertoire $repertoire)
    {
        $repertoire->update([
            'title' => $request->title,
            'title_fr' => $request->title_fr,
            'user_id' => Auth::user()->id,
            'file_path' => $request->file_path
        ]);

        return redirect(route('repertoire.show', $repertoire->id))->withSuccess('repertoire updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Repertoire  $repertoire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repertoire $repertoire)
    {
        $repertoire->delete();
        return redirect(route('repertoire.page'))->withSuccess('repertoire Deleted');
    }

    

    public function page() {
        $repertoires = Repertoire::select('id','title', 'title_fr', 'created_at')
                ->orderby('title')
                ->paginate(10);
    
        if (!$repertoires) {
            $repertoires = [];
        }
    
        return view('repertoire.page', ['repertoires' => $repertoires]);
    }
}
