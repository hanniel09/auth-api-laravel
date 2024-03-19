@extends('vehicles.layout')
@section('content')
<div class="card">
    <div class="class-header">Contactus Page</div>
    <div class="card-body">

        <form action="{{ url('vehicle/'. $vehicles->id )}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$vehicles->id}}" id="id"/>
            <label>Model</label>
            <input type="text" name="model" id="model" value="{{$vehicles->model}}" class="form-control"/>
            </br>
            <label>Brand</label>
            <input type="text" name="brand" id="brand" value="{{$vehicles->brand}}" class="form-control"/> </br>
            <label>License Plate</label>
            <input type="number" name="license-plate" id="license-plate" value="{{$vehicles->license_plate}}" class="form-control"></br>
            <label>Year</label>
            <input type="number" name="year" id="year" value="{{$vehicles->year}}" class="form-control"></br>

            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop