@extends('layouts.app')

@section('content')
<img id="regFormPicture" src="../storage/pictures/home.jpg" alt="background" title="background">
<div class="container">
    <div class="row">
        {{-- from database --}}
        @foreach ($schools as $item)
        {{-- sets the amount of card we can put next to each other col-4*3 = 12 -> 3 card will be displayed in one row --}}
        <div class="col-4">
            {{-- card --}}
            <div class="card bg-dark text-light" id="cardCourses">
                <div class="card-tittle"> {{-- tittle of the card --}}
                    <div class="card-header cardTitle aboutTittle">{{$item->name}}</div>
                </div>{{-- end of the tittle --}}
                <div class="card-body"> {{-- body of the card --}}
                    <div class="row">{{-- main content of card --}}
                            <div class="row">{{-- TOP row --}}
                                <div class="col-4">{{-- left side of the top row --}}
                                    <p class="card-text aboutFont">Address:</p>
                                </div>
                                <div class="col-8"> {{-- right side of the top row --}}
                                    <p class="card-text aboutFont">{{$item->address}}
                                </p></div>
                            </div>
                            <div class="row">{{-- MIDDLE row --}}
                                <div class="col-4">
                                    <p class="card-text aboutFont">Contact name:</p></div>
                                <div class="col-8">
                                    <p class="card-text aboutFont">{{$item->contactname}}</p></div>
                            </div>
                            <div class="row">{{-- BOTTOM row --}}
                                <div class="col-4">
                                    <p class="card-text aboutFont">Email:</p></div>
                                <div class="col-8">
                                    <p class="card-text aboutFont">{{$item->email}}</p></div>
                            </div>
                    </div>{{-- end main content of card --}}
                </div>{{-- end ofthe body of the card --}}
            </div>{{-- end of the card --}}
        </div>{{-- end of col-4 that setts the amount --}}
        @endforeach
    </div>{{-- end of row --}}
</div>{{-- end of container --}}
@endsection