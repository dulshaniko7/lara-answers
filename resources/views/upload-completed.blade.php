@extends('template')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-6">
<h2>Photo</h2>
                <img src="" alt="">
                <img class="img-thumbnail" src="{{asset('storage/'.$user->image)}}" alt="">
<h4>Filename -: {{$filename}}</h4>
            </div>
        </div>
    </div>
@endsection