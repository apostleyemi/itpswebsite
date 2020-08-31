
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<div class="container" >
    <br><br><br><br><br><br><br><br><br>
    <h3><u>Instruction:<br> 1. Click on Add Question Button to create New  <br>2. check only the correct options among the options per question</u></h3>
    <div >

        <div class="col-md-2" >
            <button id="addMore" class="btn btn-success btn-lg">Add Question </button>
        </div>
    </div>

        <div class="col-md-5">


            <form action="{{route('addQuestion')}}" method="post">
                @csrf

                <table class="table table-sm table-bordered" style="display: none;">
                    <thead>
                    <tr>
                        <th>Question</th>
                        <th>option1</th>
                        <th>option2</th>
                        <th>option3</th>
                        <th>option4</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody id="addRow" class="addRow">

                    </tbody>
                    <tbody>

                    </tbody>

                </table>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </form>

        </div>

</div>


<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>

<script id="document-template" type="text/x-handlebars-template">
    <tr class="delete_add_more_item" id="delete_add_more_item">

        <td>

            <textarea  name="question[]" rows="5" value="@{{ question }}" required></textarea>
        </td>
        <td>
            <input type="checkbox" name="is_correct[]" value="{{1}}"><label>is_correct</label>
            <textarea  class="cost" name="option_one[]" value="" required></textarea>
        </td>
        <td>
            <input type="checkbox" name="is_correct[]" value="{{2}}"><label>is_correct</label>
            <textarea  class="cost" name="option_two[]" value="" required></textarea>
        </td>
        <td>
            <input type="checkbox" name="is_correct[]" value="{{3}}"><label>is_correct</label>
            <textarea  class="cost" name="option_three[]" value="" required></textarea>
        </td>
        <td>
            <input type="checkbox" name="is_correct[]" value="{{4}}"><label>is_correct</label>
            <textarea  class="cost" name="option_four[]" value="" required></textarea>
        </td>

        <td>
            <i class="removeaddmore"  style="cursor:pointer;color:red;">Remove</i>
        </td>

    </tr>
</script>

<script type="text/javascript">

    $(document).on('click','#addMore',function(){

        $('.table').show();

        /*var question = $("#question").val();
        var option_one = $("#option_one").val();
        var option_two = $("#option_two").val();
        var option_three = $("#option_three").val();
        var option_four = $("#option_four").val();*/
        var source = $("#document-template").html();
        var template = Handlebars.compile(source);

       /* var data = {
            task_name: task_name,
            cost: cost
        }*/

        var html = template();
        $("#addRow").append(html)

      /*  total_ammount_price();*/
    });

    $(document).on('click','.removeaddmore',function(event){
        $(this).closest('.delete_add_more_item').remove();
      /*  total_ammount_price();*/
    });

   /* function total_ammount_price() {
        var sum = 0;
        $('.cost').each(function(){
            var value = $(this).val();
            if(value.length != 0)
            {
                sum += parseFloat(value);
            }
        });
        $('#estimated_ammount').val(sum);
    }*/

</script>

</body>
</html>
