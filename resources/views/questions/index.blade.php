@extends('template')

@section('content')
    <div class="container">
        <h1>Recent Questions</h1>
        <hr/>
        <div class="mt-5">
            @foreach($questions as $qusetion)
                <div class="card">

                    <div class="card-title">
                        <h3>{{ $qusetion->title }}</h3>
                    </div>
                    <div class="card-body">
                        <h5>Description -: {{ $qusetion->description }}</h5>
                    </div>

                </div>




                @if ( $qusetion->answers->count() > 0)
                    <div class="card mt-3">
                        <h4>Answers for that question</h4>

                        @foreach($qusetion->answers as $answer)

                            <h5 class="mt-3">{{ $answer->content }}</h5>
                            <p> Answer by {{ $answer->user->name }} at {{ $answer->created_at->diffForHumans() }}</p>

                            @if(Auth::check())
                                @if($answer->user->id == Auth::user()->id)


                                    <a class="btn btn-info mt-2 mb-3"
                                       href="{{ route('answers.edit',$answer->id)}}">Edit answer</a>

                                @endif

                            @endif




                    @endforeach


                @else
                    <div class="card mb-3">
                        <h6 class="mb-3">No answers for this question yet</h6>
                    </div>
                @endif
                <hr/>





        <h5>Your Answer</h5>

        <form action="{{ route('answers.store') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" value="{{ $qusetion->id }}" name="question_id">
            <textarea name="content" class="form-control" id="content" rows="5"></textarea>
            <button type="submit" class="btn btn-primary mt-2 mb-3">Submit answer</button>
        </form>

        @endforeach

    {{ $questions->links() }}
    </div>

@endsection
