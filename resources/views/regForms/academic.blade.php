<div style="display: none" id="academicForm">
<h4 class="sub-title align-center">Academic</h4>
<form id="academicForm" name="academicForm">



    <div class="form-group row">
        <label for="institution" class="col-md-4 col-form-label text-md-right">{{ __('Institution') }}</label>

        <div class="col-md-6">
            <input id="institution" type="text" class="form-control" name="institution" >


        </div>
    </div>
    <div class="form-group row">
        <label for="discipline" class="col-md-4 col-form-label text-md-right">{{ __('Discipline') }}</label>

        <div class="col-md-6">
            <input id="discipline" type="text" class="form-control"  name="discipline" >


        </div>
    </div>

    <div class="form-group row">
        <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('IT Duration') }}</label>

        <div class="col-md-6">
            <select id="duration"  class="form-control"  name="duration" >
                <option value="" selected disabled>--Select--</option>
                <option value="3months">3 mounths</option>
                <option value="6months">6 months</option>
                <option value="9months">9 months</option>
                <option value="1yr">1 years</option>
                <option value="notlisted">Not Listed</option>
            </select>


        </div>
    </div>

    <div class="form-group row">
        <label for="itstate" class="col-md-4 col-form-label text-md-right">{{ __('Preferred IT State') }}</label>

        <div class="col-md-6">
            <select id="itstate"  class="form-control"  name="itstate" >
                <option value="" selected disabled>--Select--</option>
                <option value="Abia">Abia</option>
                <option value="Osun">Osun</option>
                <option value="Oyo">Oyo</option>
                <option value="Lagos">Lagos</option>
                <option value="Ondo">Ondo</option>
            </select>


        </div>
    </div>

    <div class="form-group row">
        <label for="itcity" class="col-md-4 col-form-label text-md-right">{{ __('Preferred IT City') }}</label>

        <div class="col-md-6">
           <input type="text" class="form-control" name="itcity" id="itcity">


        </div>
    </div>

    <div class="form-group row">
        <label for="academic_level" class="col-md-4 col-form-label text-md-right">{{ __('Academic Level') }}</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="academic_level" id="academic_level">


        </div>
    </div>



    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-info">
                {{ __('Save') }}
            </button>
        </div>
    </div>
</form>
</div>
