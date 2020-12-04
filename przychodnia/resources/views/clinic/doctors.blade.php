@extends('clinic.layout')
@section('list')
    <h2> Thats our doctors</h2>
    @foreach($data as $doctors)
        <hr>
        <p>Name: {{$doctors->name}}</p>
        <p>Surname: {{$doctors->surname}}</p>
        <p>Specialization: {{$doctors->specialization}}</p>
    @endforeach
@endsection
@section('title')
    Doctors
@endsection
