<div class="footer_wrapper m24_cover">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 col-12 col-sm-12">
                <div class="footer_widget footer_about_wrapper m24_cover">
                    <div class="wrapper_first_image">
                        <a href="{{route('index')}}"><img src="{{url('/Logos').'/'.$logopath}}" class="img-responsive"
                                                          alt="logo"/></a>
                    </div>
                    <div class="abotus_content">
                        <p>{!! $footersettings->about !!}</p>
                    </div>
                    <ul class="footer_about_link_wrapper m24_cover">
                        <li><i class="fa fa-phone"></i> {{$footersettings->phone}}</li>
                        <li><a href="javascript:void(0);"><i class="fa fa-envelope"></i>{{$footersettings->email}}</a>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 col-sm-12">
                <div class="footer_widget footer_contact_wrapper m24_cover">
                    <h4>Contact Us </h4>
                    <p>{{$footersettings->contact}}</p>
                    <div class="lang_apply_btn footer_cont_btn">
                        <ul>
                            <li>
                                <a href="{{route('contact')}}"> <i></i>Contact Us</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 col-sm-12">
                <div class="footer_widget footer_contact_wrapper m24_cover">
                    <h4>newsletter</h4>
                    <p>Our latest news & Special Offers </p>
                    <center id="form_result" style="margin-bottom:35px"></center>
                    <form id="newsletter">
                        @csrf
                        <div id="overlay" style="display:none;" class="newsletteroverlay">
                            <div class="spinner"></div>
                            <br/>
                            Loading...
                        </div>
                        <div class="contect_form_footer m24_cover">
                            <input type="text" name="fname" placeholder="first name" required>
                        </div>
                        <div class="contect_form_footer m24_cover">
                            <input type="text" name="lname" placeholder="last name" required>
                        </div>
                        <div class="contect_form_footer m24_cover">
                            <input type="text" name="user_email" placeholder="Email" required>
                        </div>
                        <div class="lang_apply_btn footer_cont_btn">
                            <ul>
                                <li>
                                    <a href="javascript:$('#newsletter').submit();"> <i></i>subscribe</a>
                                </li>
                            </ul>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@if (preg_match( '/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i' ,$footersettings->facebook) &&
preg_match( '/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i' ,$footersettings->twitter) &&
preg_match( '/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i' ,$footersettings->instagram) &&
preg_match( '/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i' ,$footersettings->linkedin))
<div class="foter_top_wrapper m24_cover">
    <div class="container">
        <ul>
            @if(preg_match( '/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i' ,$footersettings->facebook))

            <li><a href="{{$footersettings->facebook}}"><i class="fab fa-facebook-f"></i></a>
                </li>
            @endif
                @if(preg_match( '/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i' ,$footersettings->twitter))
                <li><a href="{{$footersettings->twitter}}"><i class="fab fa-twitter"></i></a></li>
            @endif
                @if(preg_match( '/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i' ,$footersettings->instagram))
                <li><a href="{{$footersettings->instagram}}"><i class="fab fa-instagram"></i></a>
                </li>
            @endif
                @if(preg_match( '/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i' ,$footersettings->linkedin))
                <li><a href="{{$footersettings->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
            @endif
        </ul>
    </div>
</div>
@endif
<div class="section2_bottom_wrapper m24_cover">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="btm_foter_box">

                    <p>{{$footersettings->footer_text}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    $("#newsletter").on("submit", function (event) {
        event.preventDefault();

        $(".newsletteroverlay").fadeIn();
        $.ajax({
            url: "/subscribe-newsletter",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            success: function (data) {
                $(".newsletteroverlay").fadeOut();
                if (data.errors) {

                    for (
                        var count = 0;
                        count < data.errors.length;
                        count++
                    ) {

                        Lobibox.notify("error", {
                            pauseDelayOnHover: true,
                            continueDelayOnInactiveTab: false,
                            position: "top right",
                            icon: "fa fa-times-circle",
                            msg: data.errors[count],
                        });
                    }
                }
                if (data.warning) {

                    Lobibox.notify("warning", {
                        pauseDelayOnHover: true,
                        continueDelayOnInactiveTab: false,
                        position: "top right",
                        icon: "fa fa-times-circle",
                        msg: data.warning,
                    });
                }
                if (data.success) {

                    Lobibox.notify("success", {
                        pauseDelayOnHover: true,
                        continueDelayOnInactiveTab: false,
                        position: "top right",
                        icon: "fa fa-check-circle",
                        msg: data.success,
                    });

                    $('#newsletter')[0].reset();
                }

            },
            // error: function () {
            // Lobibox.notify("error", {
            //     pauseDelayOnHover: true,
            //     continueDelayOnInactiveTab: false,
            //     position: "top right",
            //     icon: "fa fa-times-circle",
            //     msg: "Something went wrong!Please try again",
            // });
            // console.log("error");
            // },
        });
    });
</script>
