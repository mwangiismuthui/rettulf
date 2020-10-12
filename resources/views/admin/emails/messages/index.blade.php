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
                            @if($isSet > 3)
                            @else
                                <a href="#" class="btn btn-info btn-round waves-effect waves-light m-1" data-toggle="modal"
                                   data-target="#emailModal">Configure Email Messages </a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="emailtable" class="table table-bordered ">
                                    <thead>

                                    <th>Action</th>
                                    <th>Message Type</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>From Email</th>
                                    <th>Company Name</th>

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
    <div class="modal fade emailModal" id="emailModal">
        <div class="modal-dialog  modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Configure Email Messages</h5>
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
                    <form id="emailform" method="POST" >
                        @csrf
                        <div class="form-group">
                            <label for="identifier">Message Type</label>
                            <select name="identifier" id="identifier" class="form-control" required>
                                <option value="" selected disabled>Select Message Type</option>
                                <option value="PAYMENT-SENT">PAYMENT SENT</option>
                                <option value="WITHDRAW-REQUEST">WITHDRAW REQUEST</option>
                                <option value="MUSIC-DOWNLOADED">MUSIC DOWNLOADED</option>
                                <option value="WELCOME-MESSAGE">WELCOME-MESSAGE</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="from_email">From Email</label>
                            <input type="text" name="from_email" id="from_email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="company_name" id="company_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Email Message</label>
                            <textarea  name="message" id="message" class="form-control" required cols="30" rows="5">
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

    <!-- Large Size Modal -->

    <script>

        var table = $('#emailtable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('emailMessageIndex')}}",
            columns:[

                {data: 'action', name: 'action', orderable: false, searchable: false},
                {data: 'identifier', name: 'identifier'},
                {data: 'subject', name: 'subject'},
                {data: 'message', name: 'message'},
                {data: 'from_email', name: 'from_email'},
                {data: 'company_name', name: 'company_name'},
            ],


        });






            $("#emailform").on("submit", function (event) {
                event.preventDefault();

                $(".loadingOverlay").fadeIn();
                $.ajax({
                    url: "{{route('emailMessageStore')}}",
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
                            $('#emailform')[0].reset();
                            $('#emailModal').modal('hide');
                            $('#emailtable').DataTable().ajax.reload();
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

        $(document).ready(function(){
            $(".alert").delay(5000).slideUp(300);
        });


    </script>


@endsection
