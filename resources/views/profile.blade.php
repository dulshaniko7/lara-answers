@extends('template')

@section('content')

    <div class="container">
        <h1>Hi {{ $user->name }}</h1>
        <hr/>

        <div class="row">
            <div class="col-md-6">
                <h4>My Questions</h4>
                @foreach($user->questions as $question)
                    <div class="card">
                        <div class="card-title">
                            <h5>{{ $question->title }}</h5>
                        </div>
                        <p>{{ $question->description }}</p>
                        <a href="{{ route('questions.show', $question->id) }}" class="btn btn-link">View Question</a>
                    </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <h4>My Answers</h4>
                <div class="card">
                    @foreach($user->answers as $answer)
                    <h5>{{ $answer->question->title }}</h5>
                    <p>{{ $answer->content }}</p>
                    <a href="{{ route('questions.show',$answer->question->id) }}"  class="btn btn-link">View Question</a>
                        @endforeach
                </div>
            </div>


        </div>

    </div>




@endsection
