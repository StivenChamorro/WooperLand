<?php

namespace App\Http\Controllers;

use App\Models\Father_Topic;
use Illuminate\Http\Request;

class FatherTopicController extends Controller
{
    public function create()
    {
        return view('padretema.create');
    }

    public function index()
    {
        $fatherTopic = Father_Topic::orderBy('id','asc')->get();
        return view('padretema/listar', compact('fatherTopics'));
    }

    public function store(Request $request)
    {
        $fatherTopic = new Father_Topic();
        $fatherTopic->id=$request->id;
        $fatherTopic->fk_id_padre=$request->fk_id_padre;
        $fatherTopic->fk_id_tema=$request->fk_id_tema;
        $fatherTopic->descripcion=$request->descripcion;
        $fatherTopic->save();
        return $fatherTopic;
        
    }

    public function show($id)
    {
        $fatherTopics=Father_Topic::find($id);
        return $fatherTopics;
        //return view('padretema.show', compact('fatherTopic')); 
    }

    public function destroy($id)
    {
        $fatherTopics = Father_Topic::findOrFail($id);
        $fatherTopics->delete();
        return redirect()->route('padretema.index');
    }
}
