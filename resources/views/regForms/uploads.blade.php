<div style="display: none" id="uploadDocument">

<h4 class="sub-title align-center">Upload Document</h4>
<form method="post" action="{{route('uploadDoc')}}" enctype="multipart/form-data">
   @csrf

    <div class="form-group row">
        <label for="upload_letter" class="col-md-4 col-form-label text-md-right">{{ __('Upload Letter') }}</label>

        <div class="col-md-6">
            <input id="upload_letter" type="file" class="form-control" name="upload_letter" >


        </div>
    </div>
    <div class="form-group row">
        <label for="passport" class="col-md-4 col-form-label text-md-right">{{ __('Passport') }}</label>

        <div class="col-md-6">
            <input id="passport" type="file" class="form-control"  name="passport" >


        </div>
    </div>


    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-info">
                {{ __('Upload and Submit ') }}
            </button>
        </div>
    </div>
</form>

</div>
