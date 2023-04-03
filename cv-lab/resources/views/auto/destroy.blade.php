@extends('layouts.app')
@vite('resources/css/app.css')
@section('content')
    <p>
        Auto {{$competitor->name}} was removed
    </p>

    <p>
        <a href="{{URL::to('auto')}}"  class="p-2 bg-gray-300 rounded "> Return back </a>
    </p>
@endsection
