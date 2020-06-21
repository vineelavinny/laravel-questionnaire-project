<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('questionnaire.create');
    }
     
    public function store(){
        $data=Request()->validate([
            'title'=>'required',
            'purpose'=>'required',
        ]);
        //$data['user-id']=auth()->user()->id;
        //$questionnaire=\App\Questionnaire::create($data);
        $questionnaire=auth()->user()->questionnaries()->create($data);
        return redirect('/questionnaires/'.$questionnaire->id);
    }

    public function show(\App\Questionnaire $questionnaire){
        $questionnaire->load('questions.answers');
        //dd($questionnaire);
        return view('questionnaire.show',compact('questionnaire'));
    }
    
}
