@extends('layouts.app')
@section('content')
    <style>
        .paymentWrap {
            padding: 50px;
            text-align: center;
        }

        .paymentWrap .method img, .tab-pane img {
            background: #ffffff;
            width: 100%;
            height: 100px;
            padding: 0.75rem 1.25rem
        }

        .paymentWrap .method {
            margin: 18px;
            display: inline-block;
        }

        .paymentWrap .method:hover {
            border-color: #4cd264;
            outline: none !important;
        }


        .rounded {
            border-radius: 1rem
        }

        .nav-pills .nav-link {
            color: #555
        }

        .nav-pills .nav-link.active {
            color: white !important;
            background-color: #fa5840 !important;
        }

        .card-footer .subscribe {
            background-image: linear-gradient(to right, #f8473e, #fe7945, #ff8d61, #ff3b1b);
            border-color: #fa5840;
        }

        input[type="radio"] {
            margin-right: 5px
        }

        .bold {
            font-weight: bold
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
    @if($music != null)

        <div class="pricing_wrapper2 m24_cover">
            <div class="container py-5 mt-5">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="card ">
                            <div class="card-header">
                                <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                    <!-- Credit card form tabs -->
                                    <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                        <li class="nav-item"><a data-toggle="pill" href="#pay-stack"
                                                                class="nav-link active "> <i
                                                    class="fas fa-credit-card mr-2"></i> PayStack </a></li>
                                        <li class="nav-item"><a data-toggle="pill" href="#paypal" class="nav-link "> <i
                                                    class="fab fa-paypal mr-2"></i> Paypal </a></li>
                                        <li class="nav-item"><a data-toggle="pill" href="#flutter-wave"
                                                                class="nav-link ">
                                                <i
                                                    class="fas fa-credit-card"></i> FlutterWave </a></li>
                                    </ul>
                                </div> <!-- End -->
                                <!-- Credit card form content -->
                                <div class="tab-content">
                                    <!-- credit card info-->
                                    <div id="pay-stack" class="tab-pane fade show active pt-3">
                                        <img src="{{asset("frontend/images/Paystack-Nigeria.png")}}">
                                        <div class="card-footer">

                                            @if($source == "buy")
                                                <a href="{{route('initPayStackPayment',$music->id.'?source=buy')}}"
                                                   type="button" class="subscribe btn btn-primary btn-block shadow-sm">
                                                    Proceed
                                                </a>
                                            @elseif($source == 'upload')
                                                <a href="{{route('initPayStackPayment',$music->id.'?source=upload')}}"
                                                   type="button" class="subscribe btn btn-primary btn-block shadow-sm">
                                                    Proceed
                                                </a>
                                            @else
                                                <a href="{{route('initPayStackPayment',$music->id.'?source=404')}}"
                                                   type="button" class="subscribe btn btn-primary btn-block shadow-sm">
                                                    Proceed
                                                </a>
                                            @endif

                                        </div>
                                        <p class="text-muted"> Note: After clicking on the button, you will be directed
                                            to a
                                            secure gateway for payment. After completing the payment process, you will
                                            be
                                            redirected back to the website to view details of your order. </p>
                                    </div> <!-- End -->
                                    <!-- Paypal info -->
                                    <div id="paypal" class="tab-pane fade pt-3">
                                        <img src="{{asset("frontend/images/paypal-logo.png")}}
                                            ">
                                        <div class="card-footer">
                                            <a href="{{route('upload_payment',$music->id)}}" type="button"
                                               class="subscribe btn btn-primary btn-block shadow-sm">
                                                Proceed
                                            </a>
                                        </div>
                                        <p class="text-muted"> Note: After clicking on the button, you will be directed
                                            to a
                                            secure gateway for payment. After completing the payment process, you will
                                            be
                                            redirected back to the website to view details of your order. </p>
                                    </div> <!-- End -->
                                    <!-- bank transfer info -->
                                    <div id="flutter-wave" class="tab-pane fade pt-3">
                                        <img src="{{asset("frontend/images/flutter-logo.png")}}">
                                        <div class="card-footer">
                                            @if($source == "buy")
                                                <a href="{{route('musicBuyFlutterWavePayment',$music->id)}}"
                                                   type="button"
                                                   class="subscribe btn btn-primary btn-block shadow-sm">
                                                    Proceed
                                                </a>
                                            @elseif($source == 'upload')
                                                <a href="{{route('beatFlutterWavePayment',$music->id)}}" type="button"
                                                   class="subscribe btn btn-primary btn-block shadow-sm">
                                                    Proceed
                                                </a>
                                            @endif

                                        </div>
                                        <p class="text-muted"> Note: After clicking on the button, you will be directed
                                            to a
                                            secure gateway for payment. After completing the payment process, you will
                                            be
                                            redirected back to the website to view details of your order. </p>
                                    </div> <!-- End -->
                                    <!-- End -->
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
    @endif


@endsection

