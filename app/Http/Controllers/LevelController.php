<?php

namespace App\Http\Controllers;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    //
    public function create(){

        return view('niveles.level');

    }

    public function store(Request $request){
        $level = new Level();
        $level->name=$request->name;
        $level->prize=$request->prize;
        $level->help=$request->help;
        $level->description=$request->description;
        $level->save();
        return $request;
     }

    public function index(){

        $levels = level::orderBy('id', 'desc')->get();
        return view('niveles/listar', compact('levels'));
    }
     public Function show ($id){

        $level=level::find($id);
        $level;
        return view('niveles/show', compact('level'));

    }
    public function destroy($id) {
        $level = level::findOrFail($id);
        $level->delete();
        return redirect()->route('level.index');
    }

    public function edit(level $level)
    {
        return view('niveles.editar', compact('level'));
    }

    public function update(Request $request, Level $level)
    {
        $level->name = $request->name;
        $level->prize = $request->prize;
        $level->help = $request->help;
        $level->description= $request->description;
        
        $level->save();

        return redirect()->route('level.index');
    }
}
