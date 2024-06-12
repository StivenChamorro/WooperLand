<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use App\Models\Kid_Topic;
use App\Models\Topic;
use Illuminate\Http\Request;

class KidTopicController extends Controller
{
    public function create()
    {
        return view('niñotema.create');
    }

    public function index()
    {
        $kidTopicss = Kid_Topic::orderBy('id','asc')->get();
        return view('niñotema/listar', compact('kidTopicss'));
    }
    
    public function store(Request $request)
    {
        $kidTopic = new Kid_Topic();
        $kidTopic->id=$request->id;
        $kidTopic->fk_id_niño=$request->fk_id_niño;
        $kidTopic->fk_id_tema=$request->fk_id_tema;
        $kidTopic->save();
        return $kidTopic;
    }

    
    public function show($id)
    {
        $kidTopics=Kid_Topic::find($id);
        return $kidTopics;
        //return view('niñotema.show', compact('kidTopics')); 
    }

   
    public function destroy($id)
    {
        $kidTopics = Kid_Topic::findOrFail($id);
        $kidTopics->delete();
        return redirect()->route('niñotema.index');
        //$kidTopics->delete();
        //return redirect()->route('niñotema.index');
    }

    public function asociar(){

        $kids = Kid::all();
        $temas = Topic::all();
       
        return view('niñotema.asociar',compact('kids','temas'));

    }

    public function kidtopicstore(Request $request){

        $kid=kid::find($request->kid_id);
        $kid->roles()->attach($request->tema_id);

    }
}
