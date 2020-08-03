@extends('layouts.app')
@section('content')

<!-- contact_wrapper start -->
<div class="contact_section m24_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                <div class="m24_heading_wrapper m24_cover text-center">
                    @hasrole ('Producer')
                    <h1>UPLOAD YOUR BEAT</h1>
                    @endif
                    @hasrole ('Artist')
                    <h1>UPLOAD YOUR Sonng</h1>
                    @endif
                </div>
            </div>

            <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-12">
                <form id="music_add" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="overlay-load" style="display:none;" class="fileuploadoverlay">
                        <img src="{{url('/Loading_Icons').'/'.$loading_icon}}" alt="loader">
                        <br>
                        Uploading...
                        <!-- Progress bar -->
                        <div class="progress">
                            <div class="progress-bar" style="background-color: #ff3b1b;"></div>
                        </div>
                    </div>
                    <center id="form_result" style="margin-bottom:35px"> </center>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    @hasrole ('Producer')
                                    <label for="genre">Genre of Beat</label>
                                    @endif
                                    @hasrole ('Artist')
                                    <label for="genre">Genre of Song</label>
                                    @endif
                                    <select class="form-control require genre" id="genre" name="genre_id" required="">
                                        <option value="" disabled selected>Select Genre *</option>
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
                                    <label for="cover">Beat Title</label>
                                    <input type="text" class="form-control require" name="title" required=""
                                        placeholder="beat title*">
                                    @endif
                                    @hasrole ('Artist')
                                    <label for="cover">Song Title</label>
                                    <input type="text" class="form-control require" name="title" required=""
                                        placeholder="song title*">
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    @hasrole ('Producer')
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <label for="beat">Key of Beat</label>
                                    <select class="form-control require key" id="beat" name="key_id" required="">
                                        <option value="" disabled selected>Select Beat Key *</option>
                                        @foreach ($keys as $key)
                                        <option value="{{$key->id}}">{{$key->key}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            @hasrole('Producer')
                            <div class="form-pos">
                                <div class="form-group i-name">

                                    <label for="cover">Tempo (bpm)</label>
                                    <input type="text" class="form-control require" name="tempo" required=""
                                        placeholder="beat tempo *">

                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-e">
                                <div class="form-group i-name">
                                    @hasrole ('Producer')
                                    <label for="cover">Choose Cover Art for Beat (jpeg/png)</label>
                                    @endif
                                    @hasrole ('Artist')
                                    <label for="cover">Choose Cover Art for Song (jpeg/png)</label>
                                    @endif
                                    <input class="form-control require" name="cover_art" id="cover" type="file" required
                                        accept="image/*" required="" />

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-e">
                                <div class="form-group i-name">
                                    @hasrole ('Producer')
                                    <label for="music">Choose Beat File (mp3/wav)</label>
                                    @endif
                                    @hasrole ('Artist')
                                    <label for="music">Choose Song File (mp3/wav)</label>
                                    @endif

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
                                    @hasrole ('Producer')
                                    <label for="description">Description of Beat</label>
                                    @endif
                                    @hasrole ('Artist')
                                    <label for="description">Description of Song</label>
                                    @endif
                                    <textarea class="form-control require" name="description" required="" rows="3"
                                        id="description" placeholder=" description"></textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                    @hasrole ('Artist')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-m">
                                <div class="form-group i-message">

                                    <label for="lyrics">Music Lyrics (optional)</label>
                                    <textarea class="form-control" name="lyrics" rows="30" id="lyrics"
                                        placeholder=" Paste lyrics"></textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @hasrole ('Producer')
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-pos">
                                <div class="form-group i-name">

                                    <label for="music">Price range between $0 to $100</label>
                                    <p class="text-info">Enter $0 for free Beats</p>
                                    <input type="text" class="form-control require" name="price" required=""
                                        placeholder="price*">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12">
                            <div class="tb_es_btn_div">
                                <div class="response"></div>
                                <div class="tb_es_btn_wrapper">
                                    <button type="submit"><i class="flaticon-play-button"></i> Upload
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
<script src="/frontend/plugin/ckeditor/ckeditor.js"></script>

<script type="text/javascript">
    @hasrole ('Artist')
    ClassicEditor
		.create( document.querySelector( '#lyrics' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
@endif
    $(document).ready(function() {
            $('.genre').select2();           
            $('.key').select2(); 

            
    });

    $("#music_add").on("submit", function (event) {
        event.preventDefault();
         $(".fileuploadoverlay").fadeIn();
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        $(".progress-bar").width(percentComplete + '%');
                        $(".progress-bar").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },
            url: "{{route('file.store')}}",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            beforeSend: function(){
                $(".progress-bar").width('0%');
                // $('#uploadStatus').html('<img src="images/loading.gif"/>');
            },
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
                            msg:  data.warning,
                        });
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
                            icon: "fa fa-check-circle",
                            msg: data.success,
                         });
                         $('#music_add')[0].reset();
                }
                     $("#form_result").html(html);
                    setTimeout(function () {
                        $("#form_result").html("");
                    }, 6000);


            },
            error:function (data) {
                $(".fileuploadoverlay").fadeOut();
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

    // File type validation
    $("#music").change(function(){
        var allowedTypes = ['audio/mpeg','audio/wav'];
        var file = this.files[0];
        var fileType = file.type;
        if(!allowedTypes.includes(fileType)){
            alert('Please select a valid file mp3/wav.');
            $("#music").val('');
            return false;
        }
    });

    $("#cover").change(function(){
        var allowedTypes = ['image/jpeg','image/png'];
        var file = this.files[0];
        var fileType = file.type;
        if(!allowedTypes.includes(fileType)){
            alert('Please select a valid file jpeg/png.');
            $("#cover").val('');
            return false;
        }
    });
</script>


@endsection