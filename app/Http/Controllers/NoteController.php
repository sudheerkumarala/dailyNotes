<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index() {
        return view('welcome',[
            'notes'=>Note::class,
        ]);
    }
    public function store(Note $note) {
        $notes = request()->validate([
            'note_datetime' => 'required|date',
            'note_title' => 'required|max:50',
            'note_description' => 'required|max:50',
        ]);
        if($notes)
        {
            $note->create($notes);
            return redirect('/notes')->with('success',"Note successfully submitted");
        }
        else{
            dd('Validation failed');
        }

    }

    public function show(){
        return view('show',[
            'notes'=> Note::paginate(50),
        ]);
    }
    public function destroy(Note $note){
        $note->delete();
        return back()->with('success', "Deleted uhh");
    }
    public function update(Note $note){

        try{
            $notes = request()->validate([
                'note_datetime' => 'required|date',
                'note_title' => 'required|max:50',
                'note_description' => 'required|max:50',
            ]);
            $note->update($notes);
            return redirect('/notes')->with('success', "Updated");
        }
        catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }

    }

    public function edit(Note $note)
    {
        return view('edit',['note'=>$note]);
    }

}
