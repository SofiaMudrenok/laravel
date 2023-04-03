@extends('layouts.app')
@vite('resources/css/app.css')
@section('content')
    <div class="relative flex flex-col	 items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
        <h1>Edit Car</h1>

        <form action="{{URL::to('auto') .'/' . $auto->id}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <label>Vendor: <input name="vendor" type="text" value="{{$auto->vendor}}"></label>
            <br>
            <label>Driver: <input name="user" type="text" value="{{$auto->user}}"></label>
            <br>
            <label>Numberplate: <input name="numberplate" type="number" value="{{$auto->numberplate}}"></label>
            <br>
            <label>Color: <input name="color" type="text" value="{{$auto->color}}"></label>
            <br>
            <label>Dps id: <input name="dps_id" type="number" value="{{$auto->dps_id}}"></label>
            <br>
            <button type="submit" class="p-2 bg-gray-300 rounded ">
                Edit
            </button>
        </form>
    </div>
@endsection
