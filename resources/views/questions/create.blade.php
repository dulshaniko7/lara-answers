@extends('template')
@section('content')
    <div class="container">
        <form method="post" action="{{ route('questions.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="question">Your Question</label>
                <input type="text" class="form-control form-control-sm" id="title" name="title">

            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" placeholder="Question Summary" name="description"
                          rows="4"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
