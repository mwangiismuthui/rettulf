@extends('admin.layout.main')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @elseif(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            @if($isSet > 0)
                            @else
                                <a href="#" class="btn btn-info btn-round waves-effect waves-light m-1" data-toggle="modal"
                                   data-target="#mailChipConfigModal">Configure Mailchimp API </a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="mailChipConfigTable" class="table table-bordered ">
                                    <thead>

                                    <th>Action</th>
                                    <th>Api Key</th>
                                    <th>List ID</th>

                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Row-->
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade mailChipConfigModal" id="mailChipConfigModal">
        <div class="modal-dialog  modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Configure MailChimp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="overlay" style="display:none;" class="loadingOverlay">
                        <div class="spinner"></div>
                        <br />
                        Saving...
                    </div>
                    <form id="mailChipConfig" method="POST" >
                        @csrf
                        <div class="form-group">
                            <label for="api_key"><strong>API Key</strong> (The API key of a MailChimp account. You can find yours at
                                https://us10.admin.mailchimp.com/.)</label>
                            <input type="text" name="api_key" id="api_key" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="list_id"><strong>List ID</strong> (A MailChimp list id. Check the MailChimp docs if you don't know
                                how to get this value:http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id.)</label>
                            <input type="text" name="list_id" id="list_id" class="form-control" required>
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

    <!-- Large Size Modal -->

    <script>

        var table = $('#mailChipConfigTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('mailChipConfigIndex')}}",
            columns:[

                {data: 'action', name: 'action', orderable: false, searchable: false},
                {data: 'api_key', name: 'api_key'},
                {data: 'list_id', name: 'list_id'},
            ],


        });






        $("#mailChipConfig").on("submit", function (event) {
            event.preventDefault();

            $(".loadingOverlay").fadeIn();
            $.ajax({
                url: "/mail-chip/config/store",
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
                        $('#mailChipConfigModal').modal('hide');
                        $('#mailChipConfigTable').DataTable().ajax.reload();

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

        $(document).ready(function(){
            $(".alert").delay(5000).slideUp(300);
        });


    </script>


@endsection
