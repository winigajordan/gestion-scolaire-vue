<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauxController extends Controller
{
    //

    public function index()
    {
        $niveaux = Niveau::latest()->paginate(10);
        return inertia('Niveau/Index' , [
            'niveaux' => $niveaux
        ]   );

    }

    public function create()
    {
        return inertia('Niveau/Create');
    }

    public function store(Request $request)
    {
        Niveau::create([
            'libelle' => $request->libelle
        ]);

        //dd("hello");

        return redirect()->back();
    }

    public function edit($id)
    {
        $niveau = Niveau::findOrFail($id);
        $niveau = Niveau::find($niveau);
        return inertia('Niveau/Update', compact('niveau'));
    }

    public function update(Request $request, Niveau $niveau){
        $libelle = $request->libelle;
        $niveau->update([
            'libelle' => $libelle,
        ]);
        return redirect()->route('niveau.index');
    }

    public function destroy($id)
    {
        $niveau = Niveau::findOrFail($id);
        $niveau->delete();
        return redirect()->route('niveau.index');
    }


}
