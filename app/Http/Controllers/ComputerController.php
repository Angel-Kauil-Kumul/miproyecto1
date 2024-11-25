<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Computer;


class ComputerController extends Controller
{
    public function index(){
        /*$comp = Computer::all();
        return $comp;*/

       /*$comp = Computer::all();
        return view('computers.index',[
            'comp'=> $comp
        ]);*/
         
        /*forma ASCENDENTE */
        //$comps = Computer::all();
        

        /* forma DESCENDENTE */
        $comps = Computer::orderBy('id','desc')->get();


        return view('computers.index',[
            'comps'=> $comps
        ]);

    }

    public function create(){
        return view('computers.create');
    }

    public function show($disp){
        $comp = Computer::find($disp);//búsqueda del registro con ID $disp
        return view('computers.show',[
            'comp'=> $comp
        ]);
    }

    public function store(Request $request){
        
        $comp = new Computer();
        $comp->mark = $request->mark;
        $comp->model = $request->model;
        $comp->size = $request->size;
        $comp->published_at = $request->published_at." 00:00:00";
        if($request->is_active=="true"){$comp->is_active = true;}
        else{$comp->is_active = false;}
        
        $comp->save();

        return redirect('/computers');
    }

    public function edit($disp){
        $comp = Computer::find($disp);
        return view('computers.edit',[
            'comp'=> $comp
        ]);
    }


public function update(Request $request, $disp){
    $comp = Computer::find($disp);
    $comp->mark = $request->mark;
    $comp->model = $request->model;
    $comp->size = $request->size;
    $comp->published_at = $request->published_at;
    if($request->is_active=="true")
        {$comp->is_active = true;}
    else
        {$comp->is_active = false;}
    $comp->save();
    return redirect('/computers/'.$comp->id.'/edit');
}
public function destroy($disp)
    {
        //return "Computer eliminada".$disp;
        $comp = Computer::find($disp);
        $comp->delete();

        return redirect('/computers');
    }
}