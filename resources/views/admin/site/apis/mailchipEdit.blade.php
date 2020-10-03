<?@extends('admin.layout.main')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"> MailChip Edit API
                        </div>
                        <div class="card-body">
                            <form id="mailChipConfig" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="mailChip_id" id="mailChip_id" value="{{$mailChipAPI->id}}">

                                <div class="form-group">
                                    <label for="api_key"><strong>API Key</strong> (The API key of a MailChimp account. You can find yours at
                                        https://us10.admin.mailchimp.com/account/api-key-popup/.)</label>
                                    <input type="text" name="api_key" id="api_key" class="form-control"
                                           value="{{$mailChipAPI->api_key}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="list_id"><strong>List ID</strong> (A MailChimp list id. Check the MailChimp docs if you don't know
                                        how to get this value:http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id.)</label>
                                    <input type="text" name="list_id" id="list_id" class="form-control"
                                           value="{{$mailChipAPI->list_id}}" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary shadow-primary btn-round px-5"><i
                                            class="icon-checkbox3"></i> Save
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script>
            var mailChip_id = $('#mailChip_id').val();

            $("#mailChipConfig").on("submit", function (event) {
                event.preventDefault();

                $(".loadingOverlay").fadeIn();
                $.ajax({
                    url: "/mail-chip/config/update/" + mailChip_id,
                    method: "post",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success: function (data) {
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
