@extends('vehicles.layout')
@section('content')
    <div class="class-header">Contactus Page</div>
    <div class="card-body">

        <form action="{{ url('vehicle/'. $vehicles->id )}}" method="post">
            {!! csrf_field() !!}
@stop