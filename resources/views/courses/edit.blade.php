@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card bg-dark text-light">
            @foreach ($course as $item)
                            <form action="{{ route("courses.update", $item->id) }}" method="POST"
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
                                    <label for="level" class="form-label">Level</label>
                                    <input type="text" name="level" id="level" class="form-control @if($errors->has('level')) is-invalid @endif" value="{{old('level')}}">
                                    @error('level')
                                        <small class="text-danger">*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="c_route" class="form-label">C route</label>
                                    <input type="text" name="c_route" id="c_route" class="form-control @if($errors->has('c_route')) is-invalid @endif" value="{{old('c_route')}}">
                                    @error('c_route')
                                        <small class="text-danger">*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" name="description" id="description"
                                        class="form-control @if($errors->has('description')) is-invalid @endif" value="{{old('description')}}">
                                    @error('description')
                                        <small class="text-danger">*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <label for="picture" class="form-label">Course Image</label>
                                    <input type="file" name="picture" id="coursePicture" class="form-control @if($errors->has('picture')) is-invalid @endif">
                                    @error('picture')
                                        <small class="text-danger">*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="type_id" class="form-label">Type: 1-2-3(...)</label>
                                    <input type="text" name="type_id" id="type_id"
                                        class="form-control @if($errors->has('type_id')) is-invalid @endif" value="{{old('type_id')}}">
                                    @error('type_id')
                                        <small class="text-danger">*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3 text-center">
                                    <button type="submit" class="btn btn-warning w-75">Update</button>
                                </div>
                            </form>
                            <div class="mb-3 text-center">
                                <button id="menuBtn" class="btn btn-outline-info" onclick="window.location=' {{ route("courses.index") }} '"">Back to courses</button>
                            </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
