@extends('layouts.app')

@section('content')
<video id="welcomeVideo" playsinline autoplay loop muted poster="#">
    <source src="../storage/videos/stock.mp4">
</video>
<div class="container d-flex align-items-center justify-content-center" style="height: 80vh;">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 text-center">
            <div class="card" id="welcomeCard">
                <div class="card-body">
                    <h4 id="welcomeSlogen" class="card-title text-info">Start learning with us today!</h4>
                    <button id="welcomeButton" type="button" class="btn btn-outline-info" onclick="window.location=' {{ url("/register") }} '">Getting started</button>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
@endsection