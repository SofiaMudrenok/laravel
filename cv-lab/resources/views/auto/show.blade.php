@extends('layouts.app')
@vite('resources/css/app.css')
@section('content')

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 overflow-hidden">
                <div class="grid grid-cols-1 gap-3">
                    <div class="p-6 border-t bg-white shadow border-gray-200 dark:border-gray-300 md:border-t-0 md:border-l w-full">
                        <h1> About Car</h1>

                        <h3> {{$auto->vendor}}</h3>
                        <h3> {{$auto->user}}</h3>
                        <h3> {{$auto->numberplate}}</h3>
                        <h3> {{$auto->color}}</h3>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
