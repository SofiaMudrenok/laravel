@vite('resources/css/app.css')

@extends('layouts.app')
@section('content')
    <div
        class="relative flex flex-col	 items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
    <h1 class="text-black font-bold	">Add auto to DPS database</h1>

    <form action="{{URL::to('auto')}}" method="post" class="gap-3">
        @csrf
        <label class="gap-3 m-4">Vendor: <input name="vendor" type="text"></label>
        <br>
        <label class="gap-3">Driver: <input name="user" type="text"></label>
        <br>
        <label class="gap-3">Numberplate: <input name="numberplate" type="number"></label>
        <br>
        <label class="gap-3">Color: <input name="color" type="text"></label>
        <br>
        <label>DPS id: <input name="dps_id" type="number"></label>
        <br>
        <button type="submit" class="p-2 bg-gray-300 rounded">
            Create
        </button>
    </form>
    </div>
@endsection
