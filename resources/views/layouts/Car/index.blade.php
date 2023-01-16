@extends('main')

@section('content')
    @foreach($cars as $car)
        <div>
            {{$car->}}
        </div>
@endsection
