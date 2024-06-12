<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use Illuminate\Http\Request;

class KidController extends Controller
{
    public function create()
    {
        return view('niños.createkid');
       
    }

    public function store(Request $request)
    {
        $kid = new Kid();
        $kid->id=$request->id;
        $kid->nombre=$request->nombre;
        $kid->apellido=$request->apellido;
        $kid->edad=$request->edad;
        $kid->nickname=$request->nickname;
        $kid->avatar=$request->avatar;
        $kid->save();

        return $kid;
    }

    public function index()
    {
        $kids = Kid::orderBy('id','asc')->get();
        return view('niños/listar', compact('kids'));
    }
    
    
    public function show($id){
        $kids = Kid::find($id);
        return $kids;
        //return view('niños.show');
    }
    
    public function destroy($id) 
    {
        $kids = kid::findOrFail($id);
        $kids->delete();
        return redirect()->route('niños.index');
        //$kids->delete();
        //return redirect()->route('niños.index');
    }
}
