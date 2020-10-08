<?@extends('admin.layout.main')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"> paysStack Edit API
                        </div>
                        <div class="card-body">
                            <form id="mailChipConfig" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="paysStack_id" id="paysStack_id"
                                       value="{{$paysStack->id}}">

                                <div class="form-group">
                                    <label for="api_key">Public Key</label>
                                    <input type="text" name="public_key" id="api_key" class="form-control"
                                           value="{{$paysStack->public_key}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="secret_key">Secret Key </label>
                                    <input type="text" name="secret_key" id="secret_key" class="form-control"
                                           value="{{$paysStack->secret_key}}" required>
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
            var paysStack_id = $('#paysStack_id').val();

            $("#mailChipConfig").on("submit", function (event) {
                event.preventDefault();

                $(".loadingOverlay").fadeIn();
                $.ajax({
                    url: "/pay-stack/config/update/" + paysStack_id,
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
