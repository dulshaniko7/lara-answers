@extends('template')
@section('content')
<div id="app">
    <main-app></main-app>
</div>

    @endsection
<script>
    import MainApp from "../../js/components/MainApp";
    export default {
        components: {MainApp}
    }
</script>