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
                <div class="card-header">{{ __('Welcome to admin Home') }} ||

                    <a href="{{route('createCbt')}}" class="btn-info">Create Question</a>
                    ||
                    <a href="{{route('viewQuestion')}}" class="btn-info">View Question</a>

                </div>






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
                                <th >#</th>
                                <th >Name </th>
                                <th >Email</th>
                                <th >Phone</th>
                                <th >Gender</th>
                                <th>State</th>
                                <th>Form Status</th>
                                <th> CBT </th>
                                <th></th>


                            </tr>
                            </thead>
                            <tbody>
                            <?php $x=1; ?>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$x++}}</th>
                                <td>{{$user->first_name}}<br>{{$user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->gender}}</td>
                                <td>{{$user->state_residence}}</td>

                                <td>
                                    @if($user->form_submitted==1)
                                <a href="#" class="btn-sm btn-success"> Submitted</a>
                                    @else
                                        <button class="btn-sm btn-warning">Pending</button>
                                    @endif
                                </td>
                                <td>
                                    @if($user->cbt_taken==1)
                                        <a href="viewAnswer/{{$user->id}}" class="btn-sm btn-success">view Done</a>
                                    @else
                                        <button class="btn-sm btn-warning">Pending</button>
                                    @endif

                                </td>
                                <th>
                                    @if($user->cbt_taken==1 && $user->form_submitted==1)
                                    <a href="viewApplicant/{{$user->id}}" class="btn-info btn-sm">more...</a>
                                    @endif



                                </th>

                            </tr>
                        @endforeach


                    {{ $users->links() }}


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
