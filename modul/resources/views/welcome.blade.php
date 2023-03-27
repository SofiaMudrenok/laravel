<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        @vite('resources/css/app.css')
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
<body>
<div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
        <div class="flex items-center gap-4">
            <a href="{{route('marks')}}">To marks →</a>
        </div>
    </div>
</div>
<body>

