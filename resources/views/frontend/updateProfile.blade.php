@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="artist_wrapper_content m24_cover">
                <img src="{{url('/ProfilePics').'/'.$artist->profile_photo }}" class="img-responsive"
                    alt="{{$artist->name}}">
                <div class="artist_wrapper_text">
                    <div class="artist_wrapper_left">
                        <form method="post"  id="updateform" enctype="multipart/form-data">
                            <div id="overlay" style="display:none;" class="updateoverlay">
                                <div class="spinner"></div>
                                <br />
                                Login in...
                              </div>
                              <center style="margin-top:20px;"><span id="form_results"></span> </center>
                            @csrf
                            <div class="m24_language_box m24_cover">
                                <h1>Update Your Profile</h1>
                            </div>
                            <div class="login_form_wrapper">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-pos">
                                            <div class="form-group i-name">
                                                <label for="name">Your Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Producer/Artist Name*" value="{{$artist->name}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-pos">
                                            <div class="form-group i-name">
                                                <label for="username">Your Username</label>
                                                <input type="text" class="form-control" id="username" name="username"
                                                    placeholder="Enter your Username*" value="{{$artist->username}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-pos">
                                            <div class="form-group i-name">
                                                <label for="paypalemail">
                                                    <span class="paypal-logo">
                                                        <i>Pay</i><i>Pal</i>
                                                    </span>
                                                </label>
                                                <input type="text" class="form-control" id="paypalemail" name="paypal_email"
                                                    placeholder="Enter PayPal Email Address" value="{{$artist->paypal_email}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-pos">
                                            <div class="form-group i-name">
                                                <label for="profile"> Profile Picture<label>
                                                        <input type="file" class="form-control" id="profile"
                                                            placeholder="Upload Profile Photo" name="profile_photo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-pos">
                                            <div class="form-group i-name">
                                                <label for="about">Edit Bio</label>
                                                <input type="text" class="form-control" id="about" name="about"
                                            placeholder="Edit bio ">
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>
                           
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-pos">
                                            <div class="form-group i-name">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-pos">
                                            <div class="form-group i-name">
                                                <label for="cpassword">Confirm Password</label>
                                                <input type="password" class="form-control" id="cpassword" name="confirm-password"
                                                    placeholder="Confirm Password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lang_apply_btn_wrapper m24_cover">
                                    <div class="lang_apply_btn">
                                        <button type="submit">Update</button>
            
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


<script>
    $(document).ready(function() {
            $('.designation').select2();           
            $('.location').select2(); 


    $("#updateform").on("submit", function (e) {
      e.preventDefault(),
      $(".updateoverlay").fadeIn();
          $.ajax({
              url: "{{route('updateProfile')}}",
              method: "post",
              data: new FormData(this),
              contentType: !1,
              cache: !1,
              processData: !1,
              dataType: "json",
              success: function (data) {
                $(".updateoverlay").fadeOut();                 
                  var html = "";
                  if (data.errors) {
                      html =
                          '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" \
                      data-dismiss="alert">&times;</button><div class="alert-icon"><i class="icon-close"></i></div><div class="alert-message">\
                      <span><strong>Errors!</strong></span><br>';
                      for (
                          var count = 0;
                          count < data.errors.length;
                          count++
                      ) {
                          html +=
                              "<span>" +
                              data.errors[count] +
                              "</span><br>";
                              Lobibox.notify("error", {
                                    pauseDelayOnHover: true,
                                    continueDelayOnInactiveTab: false,
                                    position: "top right",
                                    icon: "fa fa-times-circle",
                                    msg: data.errors[count],
                                });
                      }
                      html += "</div></div>";
                  }
                  if (data.warning) {
                      html =
                          '<div class="alert alert-warning">' +
                          data.warning +
                          "</div>";
                          Lobibox.notify("warning", {
                                    pauseDelayOnHover: true,
                                    continueDelayOnInactiveTab: false,
                                    position: "top right",
                                    icon: "fa fa-times-circle",
                                    msg: data.warning,
                                });
                  }
                  if (data.success) {
                      html =
                          '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" \
                      data-dismiss="alert">&times;</button><div class="alert-icon"><i class="icon-check"></i></div><div class="alert-message">\
                      <span><strong>Success!</strong> ' +
                          data.success +
                          "</span></div></div>";

                          $("#form_results").html(html);
                          Lobibox.notify("success", {
                                pauseDelayOnHover: true,
                                continueDelayOnInactiveTab: false,
                                position: "top right",
                                icon: "fa fa-check-circle",
                                msg: data.success,
                            });
                            setTimeout(function () {
                                $("#form_results").html("");
                              $("#registerModal").hide();
                            //   window.reload.href = "/";
                            }, 2000);
                  }
                        
                  $("#form_results").html(html);
                            setTimeout(function () {
                                $("#form_results").html("");
                            }, 2000);
                      
              },
          });
      });


    });


</script>


@endsection