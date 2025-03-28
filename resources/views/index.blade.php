@extends('layout')
@section('title', 'Students')
@section('content')
<h2>Students</h2>
<!-- TODO: Add search bar here (COMPLETED)-->
<div class="mb-3">
<label for="search" class="form-label">Search by Name:</label>
<input type="text" class="form-control" id="search" >
</div>
<div class="mb-3">
<label for="maxage" class="form-label">Max Age</label>
<input type="number" class="form-control" id="maxage">
</div>
<div class="mb-3">
<label for="minage" class="form-label">Min Age</label>
<input type="number" class="form-control" id="minage">
</div>


<table class="table mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody id="student-table">

        <!-- TODO: Display student list here (COMPLETED)-->
        @include('student_rows')
    
    </tbody>
</table>

<!-- TODO: Add jQuery AJAX logic (COMPLETED)-->
<script src="{{ asset('StudentScript.js') }}"></script>

@endsection