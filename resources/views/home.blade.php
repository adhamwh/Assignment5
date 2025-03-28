@extends('layout')
@section('title', 'Home')
@section('content')
<h1 class="text-center">Welcome to Assignment 5</h1>
<div class="text-center mt-4">
    <!-- TODO: Add buttons to view/add students (COMPLETED) -->
    <h3 class="mt-4 text-grey-700 text-lg">Manage students:</h3>
    <br>
    <div class="mt-6 space-x-4">
        <a href="{{ route('students.index') }}" class="bg-green-500 text-black px-6 py-2 rounded-lg shadow-md hover:bg-green-600">View Students</a>
        <br>
        <a href="{{ route('students.create') }}" class="bg-blue-500 text-black px-6 py-2 rounded-lg shadow-md hover:bg-blue-600">Add Students</a>
    </div>
</div>
@endsection