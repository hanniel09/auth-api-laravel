@extends('vehicles.layout')
@section('content')
<div class="card">
    <div class="card-header"> Vehicles Page </div>
    <div class="card-body">

        <div class="card-body">
            <h5 class="card-title">Model : {{$vehicles->model}}</h5>
            <p class="card-text">Brand: {{$vehicles->brand}}</p>
            <p class="card-text">License Plate: {{$vehicles->license_plate}}</p>
            <p class="card-text">Year: {{$vehicles->year}}</p>
    </div>
</div>
@endsection