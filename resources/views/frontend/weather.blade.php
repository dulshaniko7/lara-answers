@extends('template')
@section('content')


    <div class="container" id="app">
        <div class="row">
            <div class="col-md-6" v-if="step == 1">
                <h1>Enter a Address</h1>

                <form>

                    <input type="text" name="location">
                    <button type="submit">get weather</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" v-if="step == 2">
                <h1>Formatted Address</h1>
                <hr/>
                <p>Weather Summary</p>

                <ul>
                    <li>Current Temp:</li>
                    <li>Feel like:</li>
                    <li>Wind Speed:</li>
                </ul>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
    <script>
        let app = new Vue({
            el: '#app',
            data() {
                step = 1
            }
        });

    </script>
@endsection