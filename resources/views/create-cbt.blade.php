@extends('layouts.app')

@section('content')
    {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
    {{--<div class="container">--}}
    {{--  <div class="row justify-content-center">--}}
    <div class="col-md-12">

        <div class="card">
            <div class="card-header">{{ __('Welcome to admin Home') }}</div>







            <div class="col-md-12">


                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Question</th>
                        <th scope="col">Option1</th>
                        <th scope="col">Option2</th>
                        <th scope="col">Option3</th>
                        <th scope="col">Option4</th>
                        <th scope="col">Action</th>
                    </tr>
                    <?php
                        $x=1;
                    ?>
                    </thead>
                    <tbody>
                    @foreach($questions as $que)
                    <tr>
                        <th scope="row">{{$x++}}</th>
                        <td>{{$que->question}}</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td><a class="btn-primary btn-sm "><i class="fa fa-close"> </i></a></td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>









            </div>


            <br>
            <br> <br>
            <br> <br>
            <br> <br>



            <br>

        </div>
    </div>
    {{--   </div>--}}
    {{--</div>--}}




@endsection
