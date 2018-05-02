<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Group;
use App\Http\Requests\NotesRequest;

class NotesController extends Controller
{
    // metodos para el controlador de notas
    public function index(Group $gruop){

    // $notes = DB::table('notes')->get(); esta sentencia trabaja con el constructor de consultas
        $groups = Group::all();
        $notes = $gruop->notes;

        return view('notes.index', compact('groups','notes'));
    }

    public function show(Note $note){
        // $note = DB::table('notes')->find($id); esta sentencia trabaja con el constructor de consultas
        // $note = Note::find($id);
        return view('notes.show', ['note' => $note]);
    }
    public function create(){
      
        $groups = Group::all();
        return view('notes.create', compact('groups'));
    } 
    public function store(){
        
        // dd(request()->all());
        request()->validate([
            'title' => 'required',
            'body' => 'required'
           
        ]);
        Note::create(request()->all());
        // una manera mas larga de guardar datos
        // $note = new Note;
        // $note->title = request()->title;
        // $note->body = request()->body;
        // $note->important = is_null(request()->important) ? '0' : '1';
        // $note->save();
        return redirect('/notes');
        // return back(); para regresar al mismo formulario
    } 

    public function edit(Note $note){
        
        $groups = Group::all();
       
        return view('notes.edit', compact('note','groups'));
        // return back(); para regresar al mismo formulario
    } 
    public function update(Note $note, NotesRequest $request){
       
        // validando de manera profesional seria recibien el request como se muestra en este metodo


        // una manera larga pero sencilla de validar es la siguiente
        // request()->validate([
        //     'title' => 'required',
        //     'body' => 'required'
           
        // ]);

        $note->update($request->all());
        // $note->update(request()->all()); otra manera de hacerlo y que dara el mismo resultado
        

        // una manera mas larga de guardar datos
        // $note->title = request()->title;
        // $note->body = request()->body;
        // $note->important = request()->important;
        // $note->save();
        return redirect('/notes');
        // return back(); para regresar al mismo formulario
    }
    public function destroy(Note $note){
        
       $note->delete();

       return redirect('/notes');       
    } 
    public function getNotes(){
        $notes=Note::all();
        return response()->json($notes);
    }
}
