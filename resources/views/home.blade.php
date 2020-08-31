@extends('layouts.app')

@section('content')
  {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

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

                @if(Auth::user()->pay_status==0)
                    {{ 'you have not paid' }}

                    <a class="btn btn-warning">make payment</a>


                @elseif(Auth::user()->pay_status==1)
                    <br>   <br>   <br>   <br>
                    <div class="row">
                        <div class="col-md-8 offset-2">
                            <ul class="list-group">

                                @if(Auth::user()->form_submitted==0)
                                <li class="list-group-item"><a href="fill-form" class="btn-success form-control" >fill Form</a></li>
                                @endif
                                @if(Auth::user()->cbt_taken==0)
                                <li class="list-group-item"><a href="{{ url('takeCbt') }}" class="btn-success form-control" >Take Online Test: Your test starts immediately you click on this button  </a></li>
                                    @else
                               {{-- <li class="list-group-item"><a href="#" class="btn-success form-control"  >Application status</a></li>--}}

                                <p class=" card-body" style="color: white; background-color: #6cb2eb">

                                    Kindly check back for your Placement!

                                </p>
                                    @endif


                            </ul>



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
