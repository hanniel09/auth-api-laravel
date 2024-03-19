@extends('vehicles.layout')
@section('content')
    <div class="card">
        <div class="card-header">Vehicles register</div>
        <div class="card-body">
            <form action="{{url('vehicle')}}" method="POST">
                {!! csrf_field() !!}
                <label>Model</label></br>
                <input type="text" name="model" id="model" class="form-control"></br>
                <label>Brand</label>
                <input type="text" name="brand" id="brand" class="form-control"></br>
                <label>License Plate</label>
                <input type="number" name="license_plate" id="license_plate" class="form-control"></br>
                <label>Year</label>
                <input type="number" name="year" id="year" class="form-control"></br>
            </form>
        </div>
    </div>
@endsection