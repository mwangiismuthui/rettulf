@extends('layouts.app')
@section('content')
<!-- contact_wrapper start -->
<div class="contact_section m24_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                <div class="m24_heading_wrapper m24_cover text-center">

                    <h1>UPLOAD YOUR MUSIC</h1>
                </div>
            </div>

            <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-12">
            <form id="music_add" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div id="overlay-load" style="display:none;" class="fileuploadoverlay">
                        <img src="/frontend/images/loader.gif" alt="loader">
                        <br>
                        Uploading...
                    </div>
                    <span id="form_result"></span>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">

                                    <select class="form-control require genre" name="genre_id">
                                        <option value="" disabled selected>Select Music Genre *</option>
                                        @foreach ($genres as $genre)
                                        <option value="{{$genre->id}}">{{$genre->genre}}</option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">
                        @hasrole ('Producer')
                        <select class="form-control require key" name="key_id" required="">
                            <option value="" disabled selected>Select Beat Key *</option>
                            @foreach ($keys as $key)
                            <option value="{{$key->id}}">{{$key->key}}</option>
                            @endforeach
                        </select>
                        @else
                            
                        @endif
                                                            

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">

                                    <label for="cover">Title</label>
                                    <input type="text" class="form-control require" name="title" required=""
                                        placeholder="title*">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            @hasrole('Producer')
                            <div class="form-pos">
                                <div class="form-group i-name">

                                    <label for="cover">Tempo</label>
                                    <input type="text" class="form-control require" name="tempo" required=""
                                        placeholder="beat tempo *">

                                </div>
                            </div>
                            @else
                            <div class="form-pos">
                                <div class="form-group i-name">

                                    <label for="cover">Choose Lyrics</label>
                                    <input type="file" class="form-control require" name="lyrics" required=""
                                        placeholder="Lyrics *">

                                </div>
                            </div>
                            @endif
                         
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-e">
                                <div class="form-group i-name">
                                    <label for="cover">Choose Cover Image</label>
                                    <input class="form-control require" name="cover_art" id="cover" type="file" required
                                        accept="image/*" required="" />

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-e">
                                <div class="form-group i-name">
                                    <label for="music">Choose Music File</label>
                                    <input class="form-control require" name="music" id="music" type="file" required
                                        accept="video/*" required="" />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-m">
                                <div class="form-group i-message">

                                    <label for="music">Description of Beat/Music</label>
                                    <textarea class="form-control require" name="description" required="" rows="5"
                                        id="description" placeholder=" description"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">
                        @hasrole ('Producer')

                        <label for="music">Price range between $10 to $100</label>
                        <input type="text" class="form-control require" name="price" required=""
                        placeholder="price*">
                        @else
                            
                        @endif
                                    

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="tb_es_btn_div">
                                <div class="response"></div>
                                <div class="tb_es_btn_wrapper">
                                    <button type="submit"><i class="flaticon-play-button"></i> Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- contact_wrapper end -->


<script type="text/javascript">
    $(document).ready(function() {
            $('.genre').select2();           
            $('.key').select2(); 

            
    });

    $("#music_add").on("submit", function (event) {
        event.preventDefault();
         $(".fileuploadoverlay").fadeIn();
        $.ajax({
            url: "{{route('file.store')}}",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",

            success:function(data){
                $(".fileuploadoverlay").fadeOut();
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
                        }
                        html += "</div></div>";

                }
                if (data.warning) {
                    html =
                        '<div class="alert alert-warning">' +
                        data.warning +
                        "</div>";
                }
                if (data.success) {
                    html =
                        '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" \
                    data-dismiss="alert">&times;</button><div class="alert-icon"><i class="icon-check"></i></div><div class="alert-message">\
                    <span><strong>Success!</strong> ' +
                        data.success +
                        "</span></div></div>";
                        Lobibox.notify("success", {
                            pauseDelayOnHover: true,
                            continueDelayOnInactiveTab: false,
                            position: "top right",
                            icon: "fa fa-times-circle",
                            msg: data.success,
                         });
                     $('#product_add')[0].reset();
                    $('#productmodal').modal('hide');
                    $('#product_table').DataTable().ajax.reload();
                }
                     $("#form_result").html(html);
                    setTimeout(function () {
                        $("#form_result").html("");
                    }, 3000);


            },
            error:function (data) {
                $(".productoverlay").fadeOut();
            Lobibox.notify("error", {
                pauseDelayOnHover: true,
                continueDelayOnInactiveTab: false,
                position: "top right",
                icon: "fa fa-times-circle",
                msg: "Something went wrong",
            });

            },
        });
    });
</script>
@endsection