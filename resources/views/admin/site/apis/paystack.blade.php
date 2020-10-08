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
                                   data-target="#paystackConfigModal">Configure paystack Payments</a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="paystackConfigTable" class="table table-bordered ">
                                    <thead>

                                    <th>Action</th>
                                    <th>Public Key</th>
                                    <th>Secret Key</th>
                                    <th>Encryption Key</th>

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
    <div class="modal fade paystackConfigModal" id="paystackConfigModal">
        <div class="modal-dialog  modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Configure paystack Payments</h5>
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
                    <form id="paystackConfig" method="POST" >
                        @csrf

                        <div class="form-group">
                            <label for="public_key">Public Key</label>
                            <input type="text" name="public_key" id="public_key" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="secret_key">Secret Key (Required)</label>
                            <input type="text" name="secret_key" id="secret_key" class="form-control" required>
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

        var table = $('#paystackConfigTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('payStackConfigIndex')}}",
            columns:[

                {data: 'action', name: 'action', orderable: false, searchable: false},
                {data: 'public_key', name: 'public_key'},
                {data: 'secret_key', name: 'secret_key'},
                {data: 'encryption_key', name: 'encryption_key'},
            ],


        });





        $("#paystackConfig").on("submit", function (event) {
            event.preventDefault();

            $(".loadingOverlay").fadeIn();
            $.ajax({
                url: "/pay-stack/config/store",
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
                        $('#paystackConfigModal').modal('hide');
                        $('#paystackConfigTable').DataTable().ajax.reload();

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
