<?php

namespace App\Http\Controllers;

use App\Models\Father;
use Illuminate\Http\Request;

class FatherController extends Controller
{
    public function create()
    {
        return view('padres.createpadre');
    }

    public function store(Request $request)
    {
        $father = new Father();
        $father->id=$request->id;
        $father->nombre_padre=$request->nombre_padre;
        $father->apellido_padre=$request->apellido_padre;
        $father->edad_padre=$request->edad_padre;
        $father->gmail_padre=$request->gmail_padre;
        $father->tiempo_uso=$request->tiempo_uso;
        $father->save();

        return $father;
    }


    public function index()
    {
        $fathers = Father::orderBy('id','asc')->get();
        return view('padres.listar', compact('fathers'));
    }

    public function show($id)
    {
        $fathers=Father::find($id);
        return $fathers;
        //return view('padres.show', compact('father'));
    }

    public function destroy($id)
    {
        $fathers = Father::findOrFail($id);
        $fathers->delete();
        return redirect()->route('padres.index');
        //$father->delete();
        //return redirect()->route('padres.index');
    }
}
