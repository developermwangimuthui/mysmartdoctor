@extends('front-end.layouts.app',['pageTitle' => __('Doctor Signup')])
@section('content')
<main>
    <div id="hero_register">
        <div class="container margin_120_95">
            <div class="row">
                <!-- /col -->
                <div class="col-lg-12 ml-auto">
                    <h1 class="offset-4 mb-5">Doctor Registration</h1>

                    <div class="box_form">
                        <form method="POST" action="{{ url('/admin/doctor') }}" enctype="multipart/form-data"
                            class="needs-validation" novalidate="">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group {{ $errors->has('given_name') ? 'has-error' : ''}}">
                                        <label for="given_name" class="control-label">{{ __('Given Name') }}</label>
                                        <input class="form-control" name="given_name" type="text" id="given_name"
                                            value="{{ isset($doctor->given_name) ? $doctor->given_name : old('given_name')}}"
                                            required>
                                        {!! $errors->first('given_name', '<p class="text-danger">:message</p>') !!}
                                        <div class="invalid-feedback"> What's your given_name?</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group {{ $errors->has('family_name') ? 'has-error' : ''}}">
                                        <label for="family_name" class="control-label">{{ __('Family Name') }}</label>
                                        <input class="form-control" name="family_name" type="text" id="family_name"
                                            value="{{ isset($doctor->family_name) ? $doctor->family_name : old('family_name')}}"
                                            required>
                                        {!! $errors->first('family_name', '<p class="text-danger">:message</p>') !!}
                                        <div class="invalid-feedback"> What's your family_name?</div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group {{ $errors->has('languages_spoken') ? 'has-error' : ''}}">
                                <label for="languages_spoken" class="control-label">{{ __('Languages Spoken') }}</label>
                                <textarea class="form-control" rows="5" name="languages_spoken" type="textarea"
                                    id="languages_spoken"
                                    required>{{ isset($doctor->languages_spoken) ? $doctor->languages_spoken : ''}}</textarea>
                                {!! $errors->first('languages_spoken', '<p class="text-danger">:message</p>') !!}
                                <div class="invalid-feedback"> What's your languages_spoken?</div>
                            </div>
                            <div class="form-group {{ $errors->has('education') ? 'has-error' : ''}}">
                                <label for="education" class="control-label">{{ __('Education') }}</label>
                                <textarea class="form-control" rows="5" name="education" type="textarea" id="education"
                                    required>{{ isset($doctor->education) ? $doctor->education : ''}}</textarea>
                                {!! $errors->first('education', '<p class="text-danger">:message</p>') !!}
                                <div class="invalid-feedback"> What's your education?</div>
                            </div>
                            <div class="row">
                                {{-- <div class="col-6">
                                    <div class="form-group {{ $errors->has('mobile_no') ? 'has-error' : ''}}">
                                <label for="mobile_no" class="control-label">{{ __('Mobile No') }}</label>
                                <input class="form-control" name="mobile_no" type="number" id="mobile_no"
                                    value="{{ isset($doctor->mobile_no) ? $doctor->mobile_no : old('mobile_no')}}"
                                    required>
                                {!! $errors->first('mobile_no', '<p class="text-danger">:message</p>') !!}
                                <div class="invalid-feedback"> What's your mobile no?</div>
                            </div>
                    </div> --}}
                    <div class="col-6">
                        <div class="form-group {{ $errors->has('alternative_mobile_no') ? 'has-error' : ''}}">
                            <label for="alternative_mobile_no"
                                class="control-label">{{ __('Alternative Mobile No') }}</label>
                            <input class="form-control" name="alternative_mobile_no" type="number"
                                id="alternative_mobile_no"
                                value="{{ isset($doctor->alternative_mobile_no) ? $doctor->alternative_mobile_no : old('alternative_mobile_no')}}"
                                required>
                            {!! $errors->first('alternative_mobile_no', '<p class="text-danger">:message</p>
                            ')
                            !!}
                            <div class="invalid-feedback"> What's your alternative mobile no?</div>
                        </div>
                    </div>
                </div>


                <a href="javascript:0" id="see" class="m-3"> See more </a>
                <div id="seemore" style=" display: none; margin-top: 5px">

                    <div class="form-group {{ $errors->has('private_practice_address') ? 'has-error' : ''}}">
                        <label for="private_practice_address"
                            class="control-label">{{ __('Private Practice  Address') }}</label>
                        <textarea class="form-control" rows="5" name="private_practice_address" type="textarea"
                            id="private_practice_address"
                            required>{{ isset($doctor->private_practice_address) ? $doctor->private_practice_address : ''}}</textarea>
                        {!! $errors->first('private_practice _address', '<p class="text-danger">:message</p>
                        ')
                        !!}
                        <div class="invalid-feedback"> What's your private practice address?</div>
                    </div>
                    <div class="form-group">
                        <label for="areas_Of_expertise"
                            class="control-label">{{ __('Areas Of expertise- ')     }}</label>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="areas_Of_expertise1" class="control-label"
                                    style=" display: -webkit-inline-box;padding: 0px;">1.<input class="form-control"
                                        name="areas_Of_expertise1"
                                        value="{{ isset($doctor->areas_Of_expertise1) ? $doctor->areas_Of_expertise1 : old('areas_Of_expertise1')}}"
                                        type="text" id="areas_Of_expertise1" style=" margin-left: 21px;"></label><br>
                                <label for="areas_Of_expertise2" class="control-label"
                                    style=" display: -webkit-inline-box;padding: 0px;">2.<input class="form-control"
                                        name="areas_Of_expertise2"
                                        value="{{ isset($doctor->areas_Of_expertise2) ? $doctor->areas_Of_expertise2 : old('areas_Of_expertise2')}}"
                                        type="text" id="areas_Of_expertise2" style=" margin-left: 21px;"></label><br>
                                <label for="areas_Of_expertise3" class="control-label"
                                    style=" display: -webkit-inline-box;padding: 0px;">3.<input class="form-control"
                                        value="{{ isset($doctor->areas_Of_expertise3) ? $doctor->areas_Of_expertise3 : old('areas_Of_expertise3')}}"
                                        name="areas_Of_expertise3" type="text" id="areas_Of_expertise3"
                                        style=" margin-left: 21px;"></label>
                            </div>
                            <div class="col-md-4">
                                <select name="dropdown" class="form-control" id="">
                                    <option value="General Dental surgeon">General Dental surgeon</option>
                                    <option value="Oral & Maxiilofacial surgeon">Oral & Maxiilofacial surgeon</option>
                                    <option value="Implantalogist">Implantalogist</option>
                                    <option value="Pedodontist">Pedodontist</option>
                                    <option value="Consultant Orthodontist">Consultant Orthodontist</option>
                                    <option value="Restorative Dental specialist">Restorative Dental specialist</option>
                                    <option value="Community Dental Specialist">Community Dental Specialist</option>
                                    <option value="Oral pathologist">Oral pathologist</option>
                                    <option value="Prosthodontist">Prosthodontist</option>
                                    <option value="Periodontist">Periodontist</option>
                                </select>
                            </div>
                        </div>


                    </div>
                    <div class="form-group {{ $errors->has('qualification') ? 'has-error' : ''}}">
                        <label for="qualification" class="control-label">{{ __('Qualification') }}</label>
                        <textarea class="form-control" rows="5" name="qualification" type="textarea" id="qualification"
                            required>{{ isset($doctor->qualification) ? $doctor->qualification : ''}}</textarea>
                        {!! $errors->first('qualification', '<p class="text-danger">:message</p>') !!}
                        <div class="invalid-feedback"> What's your qualification?</div>
                    </div>
                    <div class="form-group {{ $errors->has('professional_experiences') ? 'has-error' : ''}}">
                        <label for="professional_experiences"
                            class="control-label">{{ __('Professional Experiences') }}</label>
                        <textarea class="form-control" rows="5" name="professional_experiences" type="textarea"
                            id="professional_experiences"
                            required>{{ isset($doctor->professional_experiences) ? $doctor->professional_experiences : ''}}</textarea>
                        {!! $errors->first('professional_experiences', '<p class="text-danger">:message</p>
                        ')
                        !!}
                        <div class="invalid-feedback"> What's your professional_experiences?</div>
                    </div>

                    <div class="form-group">
                        <label for="medical_centers_that_you_are_parctsing"
                            class="control-label">{{ __('Hospital name /Medical Centers that you are parctsing  -   ') }}</label><br>

                        <label for="medical_centers_that_you_are_parctsing1" class="control-label"
                            style=" display: -webkit-inline-box;padding: 0px;">1.<input class="form-control"
                                name="medical_centers_that_you_are_parctsing1"
                                value="{{ isset($doctor->medical_centers_that_you_are_parctsing1) ? $doctor->medical_centers_that_you_are_parctsing1 : old('medical_centers_that_you_are_parctsing1')}}"
                                type="text" id="medical_centers_that_you_are_parctsing1"
                                style=" margin-left: 21px;"></label><br>
                        <label for="medical_centers_that_you_are_parctsing2" class="control-label"
                            style=" display: -webkit-inline-box;padding: 0px;">2.<input class="form-control"
                                name="medical_centers_that_you_are_parctsing2"
                                value="{{ isset($doctor->medical_centers_that_you_are_parctsing2) ? $doctor->medical_centers_that_you_are_parctsing2 : old('medical_centers_that_you_are_parctsing2')}}"
                                type="text" id="medical_centers_that_you_are_parctsing2"
                                style=" margin-left: 21px;"></label><br>
                        <label for="medical_centers_that_you_are_parctsing3" class="control-label"
                            style=" display: -webkit-inline-box;padding: 0px;">3.<input class="form-control"
                                name="medical_centers_that_you_are_parctsing3"
                                value="{{ isset($doctor->medical_centers_that_you_are_parctsing3) ? $doctor->medical_centers_that_you_are_parctsing3 : old('medical_centers_that_you_are_parctsing3')}}"
                                type="text" id="medical_centers_that_you_are_parctsing3"
                                style=" margin-left: 21px;"></label>

                    </div>
                    <div class="form-group">
                        <label for="locations_that_you_are_practicing"
                            class="control-label">{{ __('Add the preference District /Regions/Locations  that you are practicing - ') }}</label><br>

                        <label for="locations_that_you_are_practicing1" class="control-label"
                            style=" display: -webkit-inline-box;padding: 0px;">1.<input class="form-control"
                                name="locations_that_you_are_practicing1"
                                value="{{ isset($doctor->locations_that_you_are_practicing1) ? $doctor->locations_that_you_are_practicing1 : old('locations_that_you_are_practicing1')}}"
                                type="text" id="locations_that_you_are_practicing1"
                                style=" margin-left: 21px;"></label><br>
                        <label for="locations_that_you_are_practicing2" class="control-label"
                            style=" display: -webkit-inline-box;padding: 0px;">2.<input class="form-control"
                                name="locations_that_you_are_practicing2"
                                value="{{ isset($doctor->locations_that_you_are_practicing2) ? $doctor->locations_that_you_are_practicing2 : old('locations_that_you_are_practicing2')}}"
                                type="text" id="locations_that_you_are_practicing2"
                                style=" margin-left: 21px;"></label><br>
                        <label for="locations_that_you_are_practicing3" class="control-label"
                            style=" display: -webkit-inline-box;padding: 0px;">3.<input class="form-control"
                                name="locations_that_you_are_practicing3"
                                value="{{ isset($doctor->locations_that_you_are_practicing3) ? $doctor->locations_that_you_are_practicing3 : old('locations_that_you_are_practicing3')}}"
                                type="text" id="locations_that_you_are_practicing3" style=" margin-left: 21px;"></label>

                    </div>

                    <div class="form-group {{ $errors->has('refereed_person') ? 'has-error' : ''}}">
                        <label for="refereed_person"
                            class="control-label">{{ __('Name of the refereed person') }}</label>
                        <input class="form-control" name="refereed_person" type="text" id="refereed_person"
                            value="{{ isset($doctor->refereed_person) ? $doctor->refereed_person : old('refereed_person')}}"
                            required>
                        {!! $errors->first('refereed_person', '<p class="text-danger">:message</p>') !!}
                        <div class="invalid-feedback"> What's your refereed_person?</div>
                    </div>
                    <div class="form-group {{ $errors->has('refereed_person_mobile_number ') ? 'has-error' : ''}}">
                        <label for="refereed_person_mobile_number "
                            class="control-label">{{ __('Mobile number (referred person) ') }}</label>
                        <input class="form-control" name="refereed_person_mobile_number" type="number"
                            id="refereed_person_mobile_number "
                            value="{{ isset($doctor->refereed_person_mobile_number ) ? $doctor->refereed_person_mobile_number  : old('refereed_person_mobile_number ')}}"
                            required>
                        {!! $errors->first('refereed_person_mobile_number ', '<p class="text-danger">
                            :message
                        </p>') !!}
                        <div class="invalid-feedback"> What's your refereed_person_mobile_number ?</div>
                    </div>
                    <div class="form-group {{ $errors->has('passport') ? 'has-error' : ''}}">
                        <label for="passport"
                            class="control-label">{{ __('NIC or passport No                                       ') }}</label>
                        <input class="form-control" name="passport" type="number" id="passport"
                            value="{{ isset($doctor->passport) ? $doctor->passport : old('passport')}}" required>
                        {!! $errors->first('passport', '<p class="text-danger">:message</p>') !!}
                        <div class="invalid-feedback"> What's your passport?</div>
                    </div>

                    <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                        <label for="image"
                            class="control-label">{{ __('Uplaod the passport size profile picture  ') }}</label><br>
                        <input type='file' name="image" accept=".png, .jpg, .jpeg,.zip,.mp4"
                            onchange="showMyImage(this,'image')"
                            value="{{ isset($doctor->image) ? $doctor->image : old('image')}}">
                        <input type='text' name="oldimage" value="{{ isset($doctor->image) ? $doctor->image : ''}}"
                            hidden>
                        <div class="avatar-upload">
                            <div class="avatar-preview">
                                <img id="image" class="avatar-preview"
                                    src="{{ isset($doctor->image) ? Storage::url($doctor->image) : asset('upload.png')}}"
                                    alt="image" />
                            </div>
                        </div>
                        {!! $errors->first('image', '<p class="text-danger">:message</p>') !!}
                        <div class="invalid-feedback"> What's your image?</div>
                    </div>

                    <div class="form-group {{ $errors->has('registration_no') ? 'has-error' : ''}}">
                        <label for="registration_no" class="control-label">{{ __('Medical council Registration No                  
                            ') }}</label>
                        <input class="form-control" name="registration_no" type="number" id="registration_no"
                            value="{{ isset($doctor->registration_no) ? $doctor->registration_no : old('registration_no')}}"
                            required>
                        {!! $errors->first('registration_no', '<p class="text-danger">:message</p>') !!}
                        <div class="invalid-feedback"> What's your registration no?</div>
                    </div>

                    <div class="col-4">
                        <div class="form-group {{ $errors->has('signature') ? 'has-error' : ''}}">
                            <label for="signature" class="control-label">{{ __('signature') }}</label><br>
                            <input type='file' name="signature" accept=".png, .jpg, .jpeg,.zip,.mp4"
                                onchange="showMyImage(this,'signature')"
                                value="{{ isset($doctor->signature) ? $doctor->signature : old('signature')}}">
                            <input type='text' name="oldsignature"
                                value="{{ isset($doctor->signature) ? $doctor->signature : ''}}" hidden>
                            <div class="avatar-upload">
                                <div class="avatar-preview">
                                    <img id="signature" class="avatar-preview"
                                        src="{{ isset($doctor->signature) ? Storage::url($doctor->signature) : asset('upload.png')}}"
                                        alt="image" />
                                </div>
                            </div>
                            {!! $errors->first('signature', '<p class="text-danger">:message</p>') !!}
                            <div class="invalid-feedback"> What's your signature?</div>
                        </div>
                    </div>


                    <div class="border p-5">
                        <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                            <label for="username" class="control-label">{{ __('Username ') }}</label>
                            <input class="form-control" name="username" type="username" id="username"
                                value="{{ isset($patient->user->username) ? $patient->user->username : old('username')}}"
                                required>
                            {!! $errors->first('username', '<p class="text-danger">:message</p>') !!}
                            <div class="invalid-feedback"> What's your username?</div>
                        </div>
                        <div class="form-group {{ $errors->has('mobile_no') ? 'has-error' : ''}}">
                            <label for="mobile_no"
                                class="control-label">{{ __('Mobile Number') }}<small><b></b></small></label>
                            <div class="form-group">
                                <select class="form-control" name="country_code" id="country-code">
                                    <option value="+94">Sri lanka <small>+94</small></option>
                                    <option value="+977">Nepal <small>+977</small></option>
                                    <option value="+880">Bangladesh <small>+880</small></option>
                                    <option value="+61">Australia <small>+61</small></option>
                                </select>
                            </div>

                            <input class="form-control" name="mobile_no" type="mobile_no" id="mobile_no"
                                value="{{ isset($patient->user->mobile_no) ? $patient->user->mobile_no : old('mobile_no')}}"
                                placeholder="Enter Mobile no" required>
                            {!! $errors->first('mobile_no', '<p class="text-danger">:message</p>') !!}
                            <div class="invalid-feedback"> What's your mobile no?</div>
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                            <label for="password" class="control-label">{{ __('Password ') }}</label>
                            <input class="form-control" name="password" type="password" id="password" value="" required>
                            {!! $errors->first('password', '<p class="text-danger">:message</p>') !!}
                            <div class="invalid-feedback"> What's your password?</div>
                        </div>

                    </div>
                </div>
                <div class="form-group {{ $errors->has('conditions') ? 'has-error' : ''}}">
                    <label for="conditions" class="control-label"></label>
                    <div class="pretty p-default" style=" display: -webkit-box;">
                        <input type="checkbox" name="conditions"
                            {{ isset($doctor->conditions) ? $doctor->conditions=='on' ? 'checked' :'' : old('conditions')}}>
                        <div class="state p-primary" style="margin-left: 10px;">
                            <label>A agree to terms of conditions &amp; Privacy policy …….. Accepted or
                                not accepted
                            </label>
                        </div>
                    </div>
                </div>
                <p class="text-center add_top_30"><input type="submit" class="btn_1" value="Submit"></p>
                </form>
            </div>
            <!-- /box_form -->
        </div>
        <!-- /col -->
    </div>
    <!-- /row -->
    </div>
    <!-- /container -->
    </div>
    <!-- /hero_register -->
</main>
@endsection
@push('css')
<style>
    #seemore {
        display: none;
    }

</style>
@endpush
@push('js')
<script>
    $("#see").click(function () {
        $("#seemore").toggle();
    });

</script>
@endpush