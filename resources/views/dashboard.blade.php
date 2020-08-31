@extends('layouts.app')

@section('content')
    {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
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
                                <ul class="list-group">

                                    <li class="list-group-item"><a href="#" class="btn-success form-control"  >Take CBT</a></li>



                                </ul>



                            </div>
                            <div class="col-md-9">
                            <p class="title-para"> You are expected to take online assessment for </p>

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

    </script>
@endsection
