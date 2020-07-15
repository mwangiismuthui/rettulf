@extends('layouts.app')

@section('content')




<div class="blog_category_wrapper m24_cover">

    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 blog_responsive">
                <div class="blog_category_box_wrapper blog_box_wrapper float_left">
                   
                    <div class="lest_news_cont_wrapper float_left">

                        <div class="blog_heaidng_top">
                           
                            <h3> <a href="#">{{ __('Reset Password') }}
                                </a></h3>

                        </div>
                        <div class="blog-single_cntnt">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        </div>

                    </div>

                </div>
               
               
            </div>

        </div>
    </div>
</div>

@endsection
