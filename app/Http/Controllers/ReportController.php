<?php

namespace App\Http\Controllers;
use App\models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function create(){

        return view('informes.report');

    }

    public function store(Request $request){
        $report = new Report();
        $report->graphic=$request->graphic;
        $report->qualification=$request->calificacion;
        $report->detaillevelmostplayed=$request->detaillevelmostplayed;
        $report->mostplayedlevellist=$request->mostplayedlevellist;
        $report->save();
        return $request;
     }

    public function index(){

        $reports = report::orderBy('id', 'desc')->get();
        return view('informes/listar', compact('reports'));
    }
     public Function show ($id){

        $report=report::find($id);
        $report;
        return view('informes/show', compact('report'));

    }
    public function destroy($id) {
        $report = report::findOrFail($id);
        $report->delete();
        return redirect()->route('report.index');
    }
    public function edit(Report $report)
    {
        return view('informes.editar', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        $report->graphic = $request->graphic;
        $report->qualification = $request->qualification;
        $report->detaillevelmostplayed = $request->detaillevelmostplayed;
        $report->mostplayedlevellist= $request->mostplayedlevellist;
        
        $report->save();

        return redirect()->route('report.index');
    }
}
