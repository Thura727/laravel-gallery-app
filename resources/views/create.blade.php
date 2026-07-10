@extends('layout.master')
@section('title', 'Create Page')
@section('content')
    <div class="container mt-3">
     <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name </label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" >

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo : </label>
                    <input type="file" name="photo" id="photo" class="form-control @error('photo') is-invalid @enderror">

                    @error('photo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
        </form>
        </div>
        <div class="col-md-3"></div>

    </div>

    @endsection
