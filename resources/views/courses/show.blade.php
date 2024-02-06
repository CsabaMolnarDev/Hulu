@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @foreach ($course as $item)
            <div class="card bg-dark text-light" id="cardCourses">
                <div class="card-tittle"> {{-- tittle of the card --}}
                    <div class="card-header cardTitle aboutTittle">{{$item->name}}</div>
                </div>{{-- end of the tittle --}}
                <div class="card-body"> {{-- body of the card --}}
                    <div class="row">{{-- main content of card --}}
                        <div class="col-4">{{-- left side of the card --}}

                            <div class="row-12">
                                <?php
                                if ($item->picture) {
                                    echo '<img class="card-img aboutPic" src="../storage/pictures/' . $item->picture . '.jpg" alt="Unknown picture"/>';
                                }
                                else {
                                    echo '<img class="card-img aboutPic" src="../storage/pictures/courses_placeholder.png" alt="Unknown picture"/>';
                                }
                                ?>
                            </div>
                         </div>{{-- end of the left side of the card --}}
                         <div class="col-8">{{-- right side of the card --}}
                            <div class="row">{{-- TOP row --}}
                                <div class="col-4">{{-- left side of the top row --}}
                                    <p class="card-text aboutFont text-light">Level:</p>
                                </div>
                                <div class="col-8"> {{-- right side of the top row --}}
                                    <p class="card-text aboutFont text-light">{{$item->level}}
                                </p></div>
                            </div>
                            <div class="row">{{-- MIDDLE row --}}
                                <div class="col-4">
                                    <p class="card-text aboutFont text-light">Route:</p></div>
                                <div class="col-8">
                                    <p class="card-text aboutFont text-light">{{$item->c_route}}</p></div>
                            </div>
                            <div class="row">{{-- BOTTOM row --}}
                                <div class="col-4">
                                    <p class="card-text aboutFont">Description:</p></div>
                                <div class="col-8">
                                    <p class="card-text aboutFont">{{$item->description}}</p></div>
                            </div>
                        </div>{{-- end of the right side of the card --}}
                    </div>{{-- end main content of card --}}

                </div>{{-- end ofthe body of the card --}}
            </div>{{-- end of the card --}}
            @endforeach
        </div>
    </div>
</div>
{{-- QUIZ --}}
<div class="container">
    <div class="row">
        <div class="card text-center bg-dark text-light">
            <div class="card-tittle">
                <h3 class="card-tittle">A simple quiz to test your knowladge</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <label for="answere1" class="form-label">What level is this course?</label>
                            <input type="text" name="answere1" id="answere1" class="form-control @if($errors->has('answere1')) is-invalid @endif" value="{{old('answere1')}}">
                            @error('answere1')
                                <small class="text-danger">*{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <label for="answere2" class="form-label">What routes are we modifiing in this course?</label>
                            <input type="text" name="answere2" id="answere2" class="form-control @if($errors->has('answere2')) is-invalid @endif" value="{{old('answere2')}}">
                            @error('answere2')
                                <small class="text-danger">*{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <label for="answere3" class="form-label">What is the description of this course?</label>
                            <input type="text" name="answere3" id="answere3" class="form-control @if($errors->has('answere3')) is-invalid @endif" value="{{old('answere3')}}">
                            @error('answere3')
                                <small class="text-danger">*{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <label for="answere4" class="form-label">What is the name of this course?</label>
                            <input type="text" name="answere4" id="answere4" class="form-control @if($errors->has('answere')) is-invalid @endif" value="{{old('answere4')}}">
                            @error('answere4')
                                <small class="text-danger">*{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <Button name="submit" type="button" id="submit" class="btn btn-outline-success" onclick="IsAnswereCorrect();">Submit</Button>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

<script>
    /* onclick funcion if ansere = ... answeres correct else incorrect try again */
    function IsAnswereCorrect() {
        var answere1 = document.getElementById("answere1");
        var answere2 = document.getElementById("answere2");
        var answere3 = document.getElementById("answere3");
        var answere4 = document.getElementById("answere4");
        if (answere1.value == "{{$item->level}}" && answere2.value == "{{$item->c_route}}" && answere3.value == "{{$item->description}}" && answere4.value == "{{$item->name}}") {
            alert("Correct!");
        }
        else{
            alert("Incorrect, try again!");
        }
}

</script>
