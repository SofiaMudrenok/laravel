@extends('layouts.app')
@vite('resources/css/app.css')
@section('content')
    <h1>{{$auto->vendor}} was updated</h1>
    <p>
        <a href="{{URL::to('auto')}}"  class="p-2 bg-gray-300 rounded "> Return back </a>
    </p>
@endsection
