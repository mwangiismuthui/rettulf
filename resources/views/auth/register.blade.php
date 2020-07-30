@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form method="post" action="{{route('register')}}" enctype="multipart/form-data">
                @csrf
                <div class="m24_language_box m24_cover">
                    <h1>Register / Sign Up</h1>
                    <p>for unlimited music streaming & a personalised experience</p>
                </div>
                <div class="login_form_wrapper">
                    <div class="row">
                       
                        <div class="col-md-12">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <label for="name">Enter the name that you would like to appear on your profile</label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Dispaly Name*" value="{{  old('name') }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <input type="text" class="form-control" name="username"
                                        placeholder="Enter your Username" value="{{ old('username') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <input type="text" class="form-control" name="email"
                                        placeholder="Enter Email Address*" value="{{ old('email') }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <select name="location_id" class="form-control location" required>

                                        <option value="">Select Location*</option>
                                        @foreach ($locations as $location)
                                    <option {{ old('location_id') ==$location->id ? 'selected':''}} value="{{$location->id}}">{{$location->location}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <select name="designation" id="designation" class="form-control designation" required>
                                        <option value="">Select Your Designation* </option>
                                        <option {{ old('designation') =='producer' ? 'selected':''}} value="producer">Producer</option>
                                        <option {{ old('designation') =='artist'? 'selected':''}} value="artist">Artist</option>
                                        <option {{ old('designation') =='Normal User'? 'selected':''}} value="Normal User">Normal User</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <label for="profile"> Profile Picture: &nbsp;<label>
                                            <input type="file" class="form-control" id="profile"
                                                placeholder="Upload Profile Photo" name="profile_photo" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <input type="password" class="form-control" placeholder="Enter Password *"
                                        name="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name" >
                                    <input type="password" class="form-control" placeholder="confirm password*"
                                    name="password_confirmation"  required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lang_apply_btn_wrapper m24_cover">
                        <div class="lang_apply_btn">
                            <button type="submit">register</button>

                        </div>
                        {{-- <div class="cancel_wrapper">
                            <a href="{{route('index')}}">cancel</a>
                        </div> --}}
                        <div class="dont_have_account m24_cover">
                            <p>Do have an acount ? <a href="{{route('login')}}">login here</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
            $('.designation').select2();           
            $('.location').select2(); 

            
    });
    //       $(function() {

//    $('#designation').on('change',function () {
//      var designation = $(this).val();  
//      console.log(designation);
//    });
// });

</script>


@endsection