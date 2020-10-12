<?@extends('admin.layout.main')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"> Email Message Edit
                        </div>
                        <div class="card-body">
                            <div id="overlay" style="display:none;" class="loadingOverlay">
                                <div class="spinner"></div>
                                <br />
                                Saving...
                            </div>
                            <form id="emailform" method="POST" >
                                @csrf
                                <input type="hidden" name="id" value="{{$emailMessage->id}}">
                                <div class="form-group">
                                    <label for="identifier">Message Type</label>
                                    <select name="identifier" id="identifier" class="form-control" required>
                                        <option value="" selected disabled>Select Message Type</option>
                                        <option value="PAYMENT-SENT" {{$emailMessage->identifier == 'PAYMENT-SENT'? 'selected':''}}>PAYMENT SENT</option>
                                        <option value="WITHDRAW-REQUEST" {{$emailMessage->identifier == 'WITHDRAW-REQUEST'? 'selected':''}}>WITHDRAW REQUEST</option>
                                        <option value="MUSIC-DOWNLOADED" {{$emailMessage->identifier == 'MUSIC-DOWNLOADED'? 'selected':''}}>MUSIC DOWNLOADED</option>
                                        <option value="WELCOME-MESSAGE" {{$emailMessage->identifier == 'WELCOME-MESSAGE'? 'selected':''}}>WELCOME-MESSAGE</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" id="subject" class="form-control" required value="{{$emailMessage->subject}}">
                                </div>
                                <div class="form-group">
                                    <label for="from_email">From Email</label>
                                    <input type="text" name="from_email" id="from_email" class="form-control" required value="{{$emailMessage->from_email}}">
                                </div>
                                <div class="form-group">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" name="company_name" id="company_name" class="form-control" required value="{{$emailMessage->company_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="message">Email Message</label>
                                    <textarea  name="message" id="message" class="form-control" required cols="30" rows="5">
                                        {{$emailMessage->message}}
                            </textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary shadow-primary btn-round px-5"><i
                                            class="icon-checkbox3"></i> Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script>
            $("#emailform").on("submit", function (event) {
                event.preventDefault();

                $(".loadingOverlay").fadeIn();
                $.ajax({
                    url: "{{route('emailMessageUpdate')}}",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success:function(data){
                        console.log(data);
                        $(".loadingOverlay").fadeOut();
                        if (data.errors) {
                            Lobibox.notify("error", {
                                pauseDelayOnHover: true,
                                continueDelayOnInactiveTab: false,
                                position: "top right",
                                icon: "fa fa-times-circle",
                                msg: data.message,
                            });
                        }
                        if (data.success) {
                            Lobibox.notify("success", {
                                pauseDelayOnHover: true,
                                continueDelayOnInactiveTab: false,
                                position: "top right",
                                icon: "fa fa-check-circle", //path to image
                                msg: data.message,
                            });
                        }
                        if (data.error) {
                            Lobibox.notify("error", {
                                pauseDelayOnHover: true,
                                continueDelayOnInactiveTab: false,
                                position: "top right",
                                icon: "fa fa-check-circle", //path to image
                                msg: data.message,
                            });


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
@endsection
