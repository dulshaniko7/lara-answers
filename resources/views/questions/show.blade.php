@extends('template')

@section('content')
    <div class="container">


        <div class="card">
            <div class="card-title">
                {{ $question->title }}
            </div>
            <div class="card-body">
                {{ $question->description }}
            </div>
            <p>Question submit by {{ $question->user->name }} at {{ $question->created_at->diffForHumans() }}</p>
        </div>

        <!-- Answers -->
        @if($question->answers->count()>0)
            @foreach($question->answers as $answer)
                <div class="card">
                    <p>{{ $answer->content }}</p>
                    <p>Answer by {{ $answer->user->name }} at {{ $answer->created_at->diffForHumans() }}</p>
                </div>
            @endforeach

        @else
            <p>
                There are no answers
            </p>
        @endif


        <h3>Answers</h3>
        <form method="post" action="{{ route('answers.store') }}">
            {{ csrf_field() }}
            <input type="hidden" value="{{ $question->id }}" name="question_id">
            <div class="card">
                <div class="form-group">
                    <label for="question">Your Answer</label>
                    <textarea class="form-control" id="content" name="content"></textarea>

                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit Answer</button>
        </form>
    </div>

@endsection
