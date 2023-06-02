@extends('layouts.app')
@vite('resources/css/app.css')
@section('content')
    <div
        class="relative flex flex-col	 items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
    <h1>Auto`s</h1>

    <a href="{{URL::to('auto') . '/create'}}" class=" p-2 bg-gray-300 rounded 	">Add auto </a>
    @forelse($auto as $car)
        <div class="m-2 p-2 border-2 rounded border-gray flex-col gap-2 w-98">
            <p class="p-2">Car: {{$car->vendor}}</p>
            <p class="p-2">User: {{$car->user}}</p>
            <p class="p-2">Numberplate: {{$car->numberplate}}</p>
            <p class="p-2">Color: {{$car->color}}</p>
            <div class="flex-row">
            <a href="{{URL::to('auto') . '/' . $car->id}}" class="p-2 bg-gray-300 rounded ">
                Show
            </a>
            <a href="{{URL::to('auto') . '/' . $car->id . '/edit'}}" class="p-2 bg-gray-300 rounded ">
                Edit
            </a>
            <form action="{{URL::to('auto') . '/' . $car->id}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="p-2 bg-gray-300 rounded "> Delete</button>
            </form></div>
        </div>
    @empty
        <p class="underline text-gray-600">
            No auto
        </p>
    @endforelse

    <h2 class="p-2">DPS</h2>

    @forelse($dps as $dp)
        <article class="p-2">
            <h3>
                <a href="{{URL::to('dps') . '/' . $dp->id}}" class="p-2 bg-gray-300 rounded ">
                    {{$dp->region}}
                </a>
            </h3>
        </article>
    @empty
            <p class="underline text-gray-600">
            No data
        </p>
    @endforelse
    </div>
@endsection
