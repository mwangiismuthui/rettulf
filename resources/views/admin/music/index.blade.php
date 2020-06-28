@extends('admin.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">
                <div class="card">

                    <div class="card-header">
                        <i class="fa fa-table"></i> Music
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="music_table" class="table table-bordered ">
                                <thead>

                                        <th>Producer/Artist Name</th>
                                        <th>Price</th>
                                        <th>Views</th>
                                        <th>Downloads</th>
                                        <th>Type</th>

                                        <th> Payment Status</th>
                                        <th> Status</th>

                                </thead>
                                 <tbody>

                                </tbody>
                                <tfoot>
                                        <th>Producer/Artist Name</th>
                                        <th>Price</th>
                                        <th>Views</th>
                                        <th>Downloads</th>
                                        <th>Type</th>
                                        <th> Payment Status</th>
                                        <th> Status</th>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Row-->
    </div>
</div>





<!-- Modal -->
<div class="modal fade featuremodal" id="featuremodal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Feature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="featureform" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="brandname">Feature</label>
                        <input type="text" class="form-control form-control-rounded" id="feature"
                            placeholder="Enter Feature" name="feature">
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


<div class="modal fade" id="confirmmodal" role="dialog">>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-danger">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white"></i> Are you sure?</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Once deleted, you will not be able to recover this Feature</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-inverse-warning" data-dismiss="modal"><i class="fa fa-times"></i>
                    Close</button>
                <button type="button" id="ok_button" name="ok_button" class="btn btn-danger"><i
                        class="fa fa-check-trash"></i>Delete</button>
            </div>
        </div>
    </div>
</div>

<script>

        var table = $('#music_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('adminMusic.index')}}",
        columns:[

        {data: 'user.name', name: 'user.name'},
        {data: 'price', name: 'price'},
        {data: 'views', name: 'views'},
        {data: 'downloads', name: 'downloads'},
        {data: 'type', name: 'type'},
        {data: 'is_paid', name: 'is_paid', orderable: true, searchable: false},
        {data: 'status', name: 'status', orderable: true, searchable: false},
        ],


        });





   function New(music_id) {
       var status = '0';
    $.ajax({
           url:'/music/change/status',
           method:'put',
           data:{
            music_id:music_id,
            status:status,
            _token: "{{ csrf_token() }}"
           },
           success:function(data){

            console.log(data);
             $('#music_table').DataTable().ajax.reload();
           },
           error:function(data){
             $('#music_table').DataTable().ajax.reload();
           }

       });
    }

   function Published(music_id) {
       var status = '1';
    $.ajax({
           url:'/music/change/status',
           method:'put',
           data:{
            music_id:music_id,
            status:status,
            _token: "{{ csrf_token() }}"
           },
           success:function(data){

             $('#music_table').DataTable().ajax.reload();
           },
           error:function(data){
             $('#music_table').DataTable().ajax.reload();
           }

       });
    }








</script>


@endsection
