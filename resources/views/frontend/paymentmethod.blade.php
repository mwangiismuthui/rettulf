@extends('layouts.app')
@section('content')
    <style>
        .paymentWrap {
            padding: 50px;
            text-align: center;
        }

        .paymentWrap .method img {
            background: #ffffff;
            width: 200px;
            height: 100px;
        }

        .paymentWrap .method {
            margin: 18px;
            display: inline-block;
        }

        .paymentWrap .method:hover {
            border-color: #4cd264;
            outline: none !important;
        }
    </style>
    <div class="indx_title_main_wrapper">
        <div class="title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="indx_title_left_wrapper m24_cover">
                        <h2>Choose Payment Method</h2>

                        <ul>
                            <li><a href="{{route('index')}}">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                            <li>Payment-method</li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- inner Title End -->
    <!-- artist single wrapper start -->
    <div class="artist_wrapper m24_cover">

        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="paymentCont">
                        <div class="headingWrap">
                            <h3 class="headingTop text-center">Select Your Payment Method</h3>
                        </div>
                        <div class="paymentWrap">
                            <div class="method paypal">
                                <a href={{route('upload_payment',$music->id)}}"><img src="{{asset("frontend/images/paypal-logo.png")}}
                                "></a>
                            </div>
                            <div class="method flutter-wave">
                                @if($source == "buy")
                                    <a href="{{route('musicBuyFlutterWavePayment',$music->id)}}"> <img
                                            src="{{asset("frontend/images/flutter-logo.png")}}"></a>
                                @elseif($source == 'upload')
                                    <a href="{{route('beatFlutterWavePayment',$music->id)}}"> <img
                                            src="{{asset("frontend/images/flutter-logo.png")}}"></a>
                                @endif
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    @if($errors->any())
        <script type="text/javascript">
            // toastError('nooo');
            $(document).ready(function () {

                Lobibox.notify("error", {
                    pauseDelayOnHover: true,
                    continueDelayOnInactiveTab: false,
                    position: "top right",
                    icon: "fa fa-times-circle",
                    msg: "{{$errors->first()}}",
                });
            });
        </script>
    @endif


@endsection

