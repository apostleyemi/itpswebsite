@extends('layouts.app')

@section('content')
    {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">



                <style>
                    /* The container */
                    .container {
                        display: block;
                        position: relative;
                        padding-left: 35px;
                        margin-bottom: 12px;
                        cursor: pointer;
                        font-size: 22px;
                        -webkit-user-select: none;
                        -moz-user-select: none;
                        -ms-user-select: none;
                        user-select: none;
                    }

                    /* Hide the browser's default radio button */
                    .container input {
                        position: absolute;
                        opacity: 0;
                        cursor: pointer;
                    }

                    /* Create a custom radio button */
                    .checkmark {
                        position: absolute;
                        top: 0;
                        left: 0;
                        height: 25px;
                        width: 25px;
                        background-color: #eee;
                        border-radius: 50%;
                    }

                    /* On mouse-over, add a grey background color */
                    .container:hover input ~ .checkmark {
                        background-color: #ccc;
                    }

                    /* When the radio button is checked, add a blue background */
                    .container input:checked ~ .checkmark {
                        background-color: #2196F3;
                    }

                    /* Create the indicator (the dot/circle - hidden when not checked) */
                    .checkmark:after {
                        content: "";
                        position: absolute;
                        display: none;
                    }

                    /* Show the indicator (dot/circle) when checked */
                    .container input:checked ~ .checkmark:after {
                        display: block;
                    }

                    /* Style the indicator (dot/circle) */
                    .container .checkmark:after {
                        top: 9px;
                        left: 9px;
                        width: 8px;
                        height: 8px;
                        border-radius: 50%;
                        background: white;
                    }
                </style>
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    {{--<div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
    --}}
                    @if(Auth::user()->pay_status==0)
                        {{ 'you have not paid' }}

                        <a class="btn btn-warning">make payment</a>


                    @elseif(Auth::user()->pay_status==1)
                        <br>   <br>   <br>   <br>
                        <div class="row">
                            <div class="col-md-3">


                                    <li class="list-group-item"><a href="#" class="btn-success form-control"  >Take CBT</a></li>





                            </div>
                            <div class="col-md-9">
                                <p class="title-para">  <h3 align="center">Online assessment  <br><span id="display" class="fa fa-clock-o text-danger">Test Start Now</span></h3></p>
                                <?php
                                $x=1;

                                ?>






                                <form action="{{ route('storeanswer')}}" method="post" id="cbt-form">
                                    @csrf
                                    @foreach($ques as $que)

                                        {{$x++.'. '. $que->question }}
                                    <input type="hidden"  value="{{$que->id}}}">

                                    @foreach($opts as $opt)
                                        @if($que->id==$opt->question_id)

                                        <label class="container">
                                            {{ $opt->options }}
                                            <input type="radio"  name="{{$que->id}}"  value="{{$opt->id}}"  >
                                            <span class="checkmark"></span>
                                        </label>
                                            @endif
                                        @endforeach

                                    <hr>


                                @endforeach

                                    <button type="submit" class="btn btn-info">submit</button>
                                    </form>




                            </div>

                        </div>
                        {{-- {{'You have paid'}}--}}
                    @endif

                    <br>
                    <br> <br>
                    <br> <br>
                    <br> <br>
                    <br> <br>
                    <br> <br>
                    <br> <br>


                    <br>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        function CountDown(duration, display) {
            if (!isNaN(duration)) {
                var timer = duration, minutes, seconds;

                var interVal=  setInterval(function () {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    $(display).html("<b>" + minutes + "m : " + seconds + "s" + "</b>");
                    if (--timer < 0) {
                        timer = duration;
                        SubmitFunction();
                        $('#display').empty();
                        clearInterval(interVal)
                    }
                },1000);
            }
        }

       /* function SubmitFunction(){
            $('#submitted').html('submitted');

        }*/

        CountDown(9,$('#display'));

        function SubmitFunction()
        {
            document.getElementById('cbt-form').submit(); // SUBMIT FORM
        }

    </script>
@endsection
