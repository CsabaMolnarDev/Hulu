@extends('layouts.app')

@section('content')
<img id="regFormPicture" src="../storage/pictures/home.jpg" alt="background" title="background">
    <div class="row">
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card p-4 bg-dark text-light">
                <div class="card-body bg-dark text-light">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
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
                                    <button type="submit" class="btn btn-danger w-75">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
@endsection
