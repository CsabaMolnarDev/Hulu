@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card bg-dark text-light">
            @foreach ($schools as $item)
                            <form action="{{ route("schools.update", $item->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control @if($errors->has('name')) is-invalid @endif" value="{{old('name')}}">
                                    @error('name')
                                        <small class="text-danger">*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" id="address" class="form-control @if($errors->has('address')) is-invalid @endif" value="{{old('address')}}">
                                    @error('address')
                                        <small class="text-danger">*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="contactname" class="form-label">Contact name</label>
                                    <input type="text" name="contactname" id="contactname" class="form-control @if($errors->has('contactname')) is-invalid @endif" value="{{old('contactname')}}">
                                    @error('contactname')
                                        <small class="text-danger">*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" id="email"
                                        class="form-control @if($errors->has('email')) is-invalid @endif" value="{{old('email')}}">
                                    @error('email')
                                        <small class="text-danger">*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3 text-center">
                                    <button type="submit" class="btn btn-warning w-75">Update</button>
                                </div>
                            </form>
                            <div class="mb-3 text-center">
                                <button id="menuBtn" class="btn btn-outline-info" onclick="window.location=' {{ route("schools.index") }} '"">Back to schools</button>
                            </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
