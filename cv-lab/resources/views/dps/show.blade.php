@extends('layouts.app')
@vite('resources/css/app.css')
@section('content')
    <div class="relative flex flex-col	 items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">

    <h1> Show all cars </h1>

    @forelse($auto as $car)
        <div class="m-2 border-2 border-black">
            <p class="p-2">Car: {{$car->vendor}}</p>
            <p class="p-2">User: {{$car->user}}</p>
            <p class="p-2">Numberplate: {{$car->numberplate}}</p>
            <p class="p-2">Color: {{$car->color}}</p>
        </div>
    @empty
        <p>
            No cars in db
        </p>
    @endforelse
    </div>
@endsection
