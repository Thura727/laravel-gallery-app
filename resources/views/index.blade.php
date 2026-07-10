@extends('layout.master')
@section('title', 'Gallery App')
@section('content')


<div class="row mt-3">
    <div class="col md-2"> </div>
    <div class="col md-8">

        <div class="row">
            @foreach ($galleries as $gallery)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('images/' . $gallery->photo) }}" class="card-img-top" alt="{{ $gallery->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $gallery->name }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col md-2"> </div>




</div>
@endsection
