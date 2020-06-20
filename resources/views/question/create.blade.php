@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>

                <div class="card-body">
                    <form action="/questionnaires/{{$questionnaire->id}}/questions" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input type="text" name="question[question]" class="form-control" value="{{old('question.question')}}" id="question" aria-describedby="questionHelp" placeholder="Enter question">
                            <small id="questionHelp" class="form-text text-muted">Ask simple and to-the-point questions for best results</small>
                            @error('question.question')<small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="choiceHelp" class="form-text text-muted">Give choices that give you the most insight into your question.</small>
                                <div class="form-group">
                                    <label for="choice1">Choice 1</label>
                                    <input type="text" name="answers[][answer]" class="form-control" value="{{old('answers.0.answer')}}" id="choice1" aria-describedby="choiceHelp" placeholder="Enter purpose">
                                    @error('answers.0.answer')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="choice2">Choice 2</label>
                                    <input type="text" name="answers[][answer]" class="form-control" value="{{old('answers.1.answer')}}" id="choice2" aria-describedby="choiceHelp" placeholder="Enter purpose">
                                    @error('answers.1.answer')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="choice3">Choice 3</label>
                                    <input type="text" name="answers[][answer]" class="form-control" value="{{old('answers.2.answer')}}" id="choice3" aria-describedby="choiceHelp" placeholder="Enter purpose">
                                    @error('answers.2.answer')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="choice4">Choice 4</label>
                                    <input type="text" name="answers[][answer]" class="form-control" value="{{old('answers.3.answer')}}" id="choice4" aria-describedby="choiceHelp" placeholder="Enter purpose">
                                    @error('answers.3.answer')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                            </fieldset>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Questionnaire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
