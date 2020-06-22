<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(\App\Questionnaire $questionnaire){
        //dd(\App\Questionnaire::where('id',$questionnaire)->get())
        //dd($questionnaire)
        return view('question.create',compact('questionnaire'));
    }

    public function store(\App\Questionnaire $questionnaire){
        //dd(request()->all());
        //dd($questionnaire);
        $data=request()->validate([
            'question.question'=>'required',
            'answers.*.answer'=>'required'
        ]);
        $question=$questionnaire->questions()->create($data['question']);
        $ans=$question->answers()->createMany($data['answers']);
        //dd($ans);
        return redirect('/questionnaires/'.$questionnaire->id);
    }

    public function destroy(\App\Questionnaire $questionnaire,\App\Question $question){
        $question->answers()->delete();
        $question->delete();
        return redirect($questionnaire->path());
    }
}
