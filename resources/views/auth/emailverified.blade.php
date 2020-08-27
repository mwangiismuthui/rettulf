@extends('layouts.app')

@section('content')

<script>
    var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;

</script>



<div class="blog_category_wrapper m24_cover">

    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 blog_responsive">
                <div class="blog_category_box_wrapper blog_box_wrapper float_left">
                   
                    <div class="lest_news_cont_wrapper float_left">

                        <div class="blog_heaidng_top">
                            <span> <i class="flaticon-calendar"></i><script>document.write(today);</script></span>
                            <h3> <a href="javascript:void(0);">{{ __('You have verified your Email Address') }}
                                </a></h3>

                        </div>
                        <div class="blog-single_cntnt">
                       
    
                        {{ __('To continue to the music application click on the link below.') }}
                       ,
                       
                            <a href="{{route('index')}}" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to go to home') }}</a>.
                
                        </div>

                    </div>

                </div>
               
               
            </div>

        </div>
    </div>
</div>

@endsection
