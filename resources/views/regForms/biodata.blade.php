                                          <div id="biodataForm">
                                           <h4 class="sub-title align-center">Biodata</h4>

                                    <form id="biodataForm" name="biodataForm">


                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>

                                            <div class="col-md-6">
                                                <input id="first_name" type="text" class="form-control  name="name" value="{{ Auth::user()->first_name }}"  readonly>


                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>

                                            <div class="col-md-6">
                                                <input id="last_name" type="text" class="form-control  name="name" value="{{ Auth::user()->last_name }}"  readonly>


                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control  name="email" value="{{ Auth::user()->email  }}" readonly>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone ') }}</label>

                                            <div class="col-md-6">
                                                <input id="phone" type="text" class="form-control name="phone" value="{{ Auth::user()->phone}}" readonly>


                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                            <div class="col-md-6">
                                                <select id="gender" class="form-control"   name="gender"  required >
                                                    <option  value selected disabled>--Select--</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>

                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="state_residence" class="col-md-4 col-form-label text-md-right">{{ __('State of Residence') }}</label>

                                            <div class="col-md-6">
                                                <select id="state_residence" class="form-control"   name="state_residence"  required >
                                                    <option  value selected disabled>--Select--</option>
                                                    <option value="Abia">Abia</option>
                                                    <option value="Ogun">Ogun</option>
                                                    <option value="Oyo">Oyo</option>
                                                    <option value="Ondo">Ondo</option>
                                                    <option value="Lagos">Lagos</option>
                                                    <option value="Osun">Osun</option>

                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                                            <div class="col-md-6">
                                               <input type="date" class="form-control" name="dob"  id="dob">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                            <div class="col-md-6">
                                                <textarea id="address" type="text" class="form-control" name="address"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-info btn-submit" id="update_data">
                                                    {{ __('Save') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                          </div>
