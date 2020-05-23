@extends('template')
@section('content')
    <div class="container">
        <h1>Contact Us</h1>
        <form action="{{ route('contact') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" name="email" class="form-control" placeholder="name@example.com">
            </div>


            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" placeholder="subject">
            </div>
            <div class="form-group">
                <label for="subject">Message</label>
                <textarea class="form-control" name="message" placeholder="Message"></textarea>
            </div>

            <button class="btn btn-primary" value="Send Email">send email</button>
        </form>
    </div>
@endsection