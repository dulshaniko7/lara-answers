@extends('template')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Upload the picture</h1>

                <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" name="image">
                    <button type="submit" value="upload">upload</button>
                </form>
            </div>
        </div>
    </div>
@endsection