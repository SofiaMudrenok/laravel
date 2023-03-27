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
<div class="p-2">
    <table class="table-auto border-collapse border border-slate-500">
        <thead>
        <tr>
            <th class="border-collapse border border-slate-500">Name</th>
            <th class="border-collapse border border-slate-500">Course</th>
            <th class="border-collapse border border-slate-500">Specialty</th>
        </tr>
        </thead>
        <tbody>
        @foreach($marks as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->mark }}</td>
                <td>{{ $item->date }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<body>

