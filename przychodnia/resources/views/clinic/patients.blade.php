@extends('clinic.layout')
@section('list')
    <h2> Thats our patients</h2>
    @foreach($data as $patients)
        <hr>
        <p>Name: {{$patients->name}}</p>
        <p>Surname: {{$patients->surname}}</p>
        <p>Age: {{$patients->age}}</p>
    @endforeach
@endsection
@section('title')
    Patients
@endsection
