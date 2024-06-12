<?php

namespace App\Http\Controllers;

use App\Models\Achiviement;
use Illuminate\Http\Request;

class AchiviementController extends Controller
{
    //
    public function create(){

        return view('logros.achiviement');

    }

    public function store(Request $request){
        $achiviement = new Achiviement();
        $achiviement->name=$request->name;
        $achiviement->description=$request->description;
        $achiviement->prize=$request->prize;
        $achiviement->save();
        return $request;
     }

    public function index(){

        $achiviements = Achiviement::orderBy('id', 'desc')->get();
        return view('logros/listar', compact('achiviements'));
    }
     public Function show ($id){

        $achiviement=Achiviement::find($id);
        $achiviement;
        return view('logros/show', compact('achiviement'));

    }
    public function destroy($id) {
        $achiviement = Achiviement::findOrFail($id);
        $achiviement->delete();
        return redirect()->route('achiviement.index');
    }
    public function edit(Achiviement $achiviement)
    {
        return view('logros.editar', compact('achiviement'));
    }

    public function update(Request $request, Achiviement $achiviement)
    {
        $achiviement->name = $request->name;
        $achiviement->description = $request->description;
        $achiviement->prize = $request->prize;
        $achiviement->save();

        return redirect()->route('achiviement.index');
    }
}
