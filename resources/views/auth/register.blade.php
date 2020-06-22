@extends('layouts.authlayout')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="modal fade lang_m24_banner" id="register_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content"> --}}

            <div class="container">
        <form method="post"  action="{{route('register')}}" enctype="multipart/form-data">
            @csrf
                <div class="row">
    
                        <div class="m24_language_box m24_cover">
                            <h1>Register / Sign Up</h1>
                            <p>for unlimited music streaming & a personalised experience</p>
                        </div>
                        <div class="login_form_wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class=" comments_form">
    
                                        <input type="text" class="form-control" name="name" placeholder="Producer/Artist Name">
                                    </div>
                                </div>
                               
                                
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class=" comments_form">
    
                                        <input type="text" class="form-control" name="username" placeholder="Enter your Username">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" comments_form">
        
                                        <input type="text" class="form-control" name="email" placeholder="Enter Email Address*">
                                    </div>
                                </div>
                                
                                
                            </div>
                           <div class="row">
                               <div class="col-md-6">
                                <div class=" comments_form">
                                    <select name="location_id" class="form-control">
                                        <option value="">Select Location</option>
                                        @foreach ($locations ?? '' as $location)
                                    <option value="{{$location->id}}">{{$location->location}}</option>
                                        @endforeach
                                    </select>
                               
                                </div>
                               </div>
                               <div class="col-md-6">

                            <div class=" comments_form">
                                <select name="designation" id="designation" class="form-control" >
                                    <option value="">Select Your Designation </option>
                                    <option value="producer">Producer</option>
                                    <option value="artist">Artist</option>
                                </select>
                            </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-6">
                                <div class=" comments_form">
    
                                    <input type="file" class="form-control" placeholder="Upload Profile Photo" name="profile_photo">
                                </div>
                               </div>
                               <div class="col-md-6"></div>
                           </div>
                           <div class="row">
                               <div class="col-md-6">
                                <div class=" comments_form">
    
                                    <input type="password" class="form-control" placeholder="Enter Password *" name="password">
                                </div>
                               </div>
                               <div class="col-md-6">
                                <div class=" comments_form">
    
                                    <input type="password" class="form-control" placeholder="confirm password*" name="cpassword">
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
                            <p>Do have an acount ? <a href="{{route('login')}}" >login here</a></p>
                            </div>
                        </div>
    
                </div>
            </form>
            </div>            
     
<script>
//       $(function() {

//    $('#designation').on('change',function () {
//      var designation = $(this).val();  
//      console.log(designation);
//    });
// });

</script>


@endsection
