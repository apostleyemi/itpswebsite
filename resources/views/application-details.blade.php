@extends('layouts.app')

@section('content')
    {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
    {{--<div class="container">--}}
    {{--  <div class="row justify-content-center">--}}
    <div class="col-md-12">
        <div class="card-body">
            @if (session('statusmsg'))
                <div class="alert alert-success" role="alert">
                    {{ session('statusmsg') }}
                </div>
            @endif
            @if (session('cbtstatus'))
                <div class="alert alert-success" role="alert">
                    {{ session('cbtstatus') }}
                </div>
            @endif


        </div>
        <div class="card">
            <div class="card-header">{{ __('Welcome to admin Home') }}</div>





            <div class="body row">
                <div class="col-md-2">

                    <ul class="list-group">
                        <li class="list-group-item"><a href="#">Manage Users</a></li>
                        <li class="list-group-item"><a href="#">CBT panel</a></li>
                        <li class="list-group-item"><a href="#">Payment Information </a></li>


                    </ul>
                </div>
                <div class="col-md-10">



                    <table class="table">
                        <caption>Registered Users</caption>
                        <thead>
                        <tr>

                            <th><img src="{{asset('passports/'.$user->academicInfo->passport)}}" width="150" height="150"></th>
                        </tr>
                        <tr>

                            <th >Name </th><td> {{$user->first_name}}<br>{{$user->last_name}}</td>
                        </tr>

                        <tr>

                            <th >Email: </th><td> {{$user->email}}</td>
                        </tr>
                        <tr>

                            <th >Phone: </th><td> {{$user->phone}}</td>
                        </tr>
                        <tr>

                            <th >Email: </th><td> {{$user->gender}}</td>
                        </tr>
                        <tr>

                            <th >State : </th><td> {{$user->state_residence}}</td>
                        </tr>
                        <tr>

                            <th >Email: </th><td> {{$user->state_residence}}</td>
                        </tr>
                        <tr>
                            <th>Form Status</th>
                            <td>
                                @if($user->form_submitted==1)
                                    <a href="viewFormSubmitted/{{$user->id}}" class="btn-sm btn-success">view Done</a>
                                @else
                                    <button class="btn-sm btn-warning">Pending</button>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>CTB Status</th>
                            <td>
                                @if($user->cbt_taken==1)
                                    <a href="viewCbtScore/{{$user->id}}" class="btn-sm btn-success">view Done</a>
                                    <span>Score: </span>
                                @else
                                    <button class="btn-sm btn-warning">Pending</button>
                                @endif

                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align: center;">Academic info</th>
                        </tr>
                        <tr>
                            <th>Institution</th>
                            <td>{{$user->academicInfo->institution}}</td>
                        </tr>
                        <tr>
                            <th>Discipline</th>
                            <td>{{$user->academicInfo->discipline}}</td>
                        </tr>
                        <tr>
                            <th>Duration</th>
                            <td>{{$user->academicInfo->duration}}</td>
                        </tr>
                        <tr>
                            <th>Prefer State</th>
                            <td>{{$user->academicInfo->itstate}}</td>
                        </tr>
                        <tr>
                            <th>Prefer City</th>
                            <td>{{$user->academicInfo->itcity}}</td>
                        </tr>
                        <tr>
                            <th>Academic Level</th>
                            <td>{{$user->academicInfo->academic}}</td>
                        </tr>
                        <tr>
                            <th>Application Letter</th>
                            <th><a href="{{asset('letters/'.$user->academicInfo->letter)}}" target="_blank"><span class="fa fa-download"></span>   Download Letter</a> </th>
                        </tr>




                        </thead>
                        <tbody>









                        </tbody>
                    </table>


                </div>


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

    <script type="text/javascript">
        function biodataBtn() {

            document.getElementById('biodataForm').style.display="Block"
            document.getElementById('uploadDocument').style.display="none"
            document.getElementById('academicForm').style.display="none"

        }

        function academicBtn() {
            document.getElementById('biodataForm').style.display="none"
            document.getElementById('uploadDocument').style.display="none"
            document.getElementById('academicForm').style.display="Block"
        }


        function uploadBtn() {
            document.getElementById('biodataForm').style.display="none"

            document.getElementById('academicForm').style.display="none"
            document.getElementById('uploadDocument').style.display="Block"
        }

        /* $(document).ready(function(){
             if (jQuery) {
                 // jQuery is loaded
                 alert("Yeah!");
             } else {
                 // jQuery is not loaded
                 alert("Doesn't Work");
             }
         });*/

        $(document).ready(function () {


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // Biodata ajax processing
            $("#biodataForm").on('submit',function (e){
                e.preventDefault();
                // var _token = $("input[name='_token']").val();
                var gender = $("#gender").val();
                var state_residence = $("#state_residence").val();
                var dob = $("#dob").val();
                var address = $("#address").val();

                var myform=$('#biodataForm');


                $.ajax({
                    url: "{{ route('saveBiodate') }}",
                    method: 'POST',
                    dataType:'json',

                    data: {gender:gender, state_residence:state_residence,dob:dob,address:address},
                    success: function (data) {
                        // console.log(result);
                        alert(data.msg);
                        academicBtn();


                    }
                    /*error: function () {
                        alert('error');
                    }*/
                });




            });

            //Academic Ajax processing
            $("#academicForm").on("submit",function (e) {
                e.preventDefault();
                var institution= $("#institution").val();
                var discipline =$("#discipline").val();
                var duration = $("#duration").val();
                var itstate = $("#itstate").val();
                var itcity = $("#itcity").val();
                var academic = $("#academic_level").val();


                $.ajax({
                    url:'{{route('saveAcademic')}}',
                    method: 'post',
                    dataType: 'json',
                    data: {
                        institution:institution,
                        discipline:discipline,
                        duration:duration,
                        itstate:itstate,
                        itcity:itcity,
                        academic:academic
                    },
                    success:function (data) {
                        console.log(data);
                        alert("Academic Record Saved");
                        uploadBtn();
                    }

                });

            });





        });
    </script>
@endsection
