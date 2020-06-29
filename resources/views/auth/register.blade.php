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
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Producer/Artist Name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <input type="text" class="form-control" name="username"
                                        placeholder="Enter your Username">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <input type="text" class="form-control" name="email"
                                        placeholder="Enter Email Address*">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <select name="location_id" class="form-control location">
                                        <option value="">Select Location</option>
                                        @foreach ($locations as $location)
                                        <option value="{{$location->id}}">{{$location->location}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <select name="designation" id="designation" class="form-control designation">
                                        <option value="">Select Your Designation </option>
                                        <option value="producer">Producer</option>
                                        <option value="artist">Artist</option>
                                        <option value="Normal User">Normal User</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <label for="profile"> Profile Picture<label><br>
                                            <input type="file" class="form-control" id="profile"
                                                placeholder="Upload Profile Photo" name="profile_photo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <input type="password" class="form-control" placeholder="Enter Password *"
                                        name="password">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <input type="password" class="form-control" placeholder="confirm password*"
                                        name="cpassword">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lang_apply_btn_wrapper m24_cover">
                        <div class="lang_apply_btn">
                            <button type="submit">register</button>

                        </div>
                        <div class="cancel_wrapper">
                            <a href="#" class="" data-dismiss="modal">cancel</a>
                        </div>
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