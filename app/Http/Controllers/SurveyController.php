<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function show(\App\Questionnaire $questionnaire,$slug){
        $questionnaire->load('questions.answers');
        return view('survey.show',compact('questionnaire'));
    }

    public function store(\App\Questionnaire $questionnaire,$slug){
        //dd(request()->all());
        $data=request()->validate([
            'responses.*.answer_id'=>'required',
            'responses.*.question_id'=>'required',
            'survey.name'=>'required',
            'survey.email'=>'required'
        ]);
        $survey=$questionnaire->surveys()->create($data['survey']);
        //dd($survey);
        $survey->responses()->createMany($data['responses']);
        return 'Thank You!';
    }
}
