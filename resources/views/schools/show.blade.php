@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @foreach ($schools as $item)
            <div class="row">
                <div class="card">
                    <div class="card-tittle">{{$item->name}}</div>
                    <div class="card-body">
                        <p class="card-text">{{$item->address}}</p>
                        <p class="card-text">{{$item->contactname}}</p>
                        <p class="card-text">{{$item->email}}</p>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
