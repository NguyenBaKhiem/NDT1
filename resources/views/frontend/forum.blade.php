@extends('frontend.index')
@section('title')

@endsection
@section('css')
<link rel="stylesheet" href="css/frontend/forum.css">
@endsection
@section('content')
<div class="container">
    <div class="content-wrap">
        <br><br>
        <div class="main">
            <div class="row">
                <div class="alert alert-success successlogin">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Wellcome here!</strong>
                </div>
                <div class="col-md-3 fixtopevent">
                    @include('frontend.notification')
                    @include('frontend.event')

                </div>
                <div class="col-md-8 content-right">
                    <div class="card mb-3 " id="wantquestion" data-toggle="modal" data-target="#myModal">
                        <div class="card-header">
                            <div class=""><i class="fas fa-pencil-alt"></i> Compose question</div>
                        </div>
                        <div class="card-body">
                            <span class="avatar-user-question col-sm-2 col-lg-1">
                                <img src="images/system/64x64.png" alt="" width="64px" height="64px" class="img">
                            </span>
                            <div class="form-group text-user-question col-sm-10 col-lg-11">
                                <p>What do you want to ask?</p>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <!-- Modal question-->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="card mb-3 " id="wantquestion">
                                <div class="card-header">
                                    <div class=""><i class="fas fa-pencil-alt"></i> Compose question
                                        <button type="button" class="close" data-dismiss="modal" id="button-close">&times;</button>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <form enctype="multipart/form-data" method="POST" id="form-question">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="body-question row">
                                            <div class="avatar-user-question-modal">
                                                <img src="images/system/48x48.png" alt="" width="48px" height="48px" class="img">
                                            </div>
                                            <div class="form-group text-user-question-modal">
                                                <textarea tabindex="-1" rows="2" cols="1000" class="text-question-modal" id="modal-text-question" name="content" placeholder="What do you want to ask?"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="add-file" name="add-file">
                                            <label for="add-file"> <i class="ti-files"> Add file</i></label>
                                        </div>
                                        <div class="form-group" style="display: none;" id="file-zone">
                                            <div class="file-loading">
                                                <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="0" name="attachment[]">
                                            </div>
                                        </div>
                                        <button type="reset" class="btn-reset" style="display: none;"></button>
                                    </form>
                                    <a class="btn btn-lg btn-block btn-primary btn-submit" name="post" id="add-question">Post</a>
                                    <div class="alert alert-danger" style="display: none;" id="fail-question">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Fail to add !</strong> Please enter question....
                                    </div>
                                    <div class="alert alert-success" style="display: none;" id="success-question">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Yepp !</strong> Add question success...
                                    </div>
                                </div>
                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div>

                        </div>
                    </div>
                    <!-- End modal -->
                    {{-- forum --}}
                    <div class="card mb-3 click-to-change">
                        <div class="card-header">
                            <i class="fa fa-area-chart"> Forum</i>

                        </div>

                        <div class="card-body">
                            <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">

                                    </div>
                                </div>
                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0">

                                    </div>
                                </div>
                            </div>
                            <canvas id="myAreaChart" width="257" height="77" style="display: block; width: 257px; height: 77px;" class="chartjs-render-monitor"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <div class="card mb-3 ">
                        <div class="card-header">
                            <i class="fa fa-area-chart"> Forum</i>
                        </div>
                        <div class="card-body">
                            <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">

                                    </div>
                                </div>
                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0">

                                    </div>
                                </div>
                            </div>
                            <canvas id="myAreaChart" width="257" height="77" style="display: block; width: 257px; height: 77px;" class="chartjs-render-monitor"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <div class="card mb-3 ">
                        <div class="card-header">
                            <i class="fa fa-area-chart"> Forum</i>
                        </div>
                        <div class="card-body">
                            <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">

                                    </div>
                                </div>
                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0">

                                    </div>
                                </div>
                            </div>
                            <canvas id="myAreaChart" width="257" height="77" style="display: block; width: 257px; height: 77px;" class="chartjs-render-monitor"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <div class="card mb-3 ">
                        <div class="card-header">
                            <i class="fa fa-area-chart"> Forum</i>
                        </div>
                        <div class="card-body">
                            <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">

                                    </div>
                                </div>
                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0">

                                    </div>
                                </div>
                            </div>
                            <canvas id="myAreaChart" width="257" height="77" style="display: block; width: 257px; height: 77px;" class="chartjs-render-monitor"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $("click-to-change").click(function() {
        $("body").css({
            "background-color": rgba(0, 0, 0, .6)
        });
    });

</script>
<script>
    $(document).ready(function() {
        $(".open-btn").click(function() {
            $(".page-facebook").css({
                width: 340,
            });
            $(".fb-page").fadeIn();
            $(".open-btn").fadeIn().removeClass('ti-angle-double-right');
        });
        $(".close-btn").click(function() {
            $(".page-facebook").css({
                width: 15,
            });
            $(".fb-page").fadeOut();
            $(".open-btn").addClass('ti-angle-double-right');
        });
    });

</script>
{{-- autosize for textarea --}}
<script src="js/lib/autosizetextarea/autosize.min.js"></script>
<script>
    autosize(document.querySelectorAll('textarea'));

</script>
{{-- event scroll--}}
{{-- <script>
    $(window).scroll(function() {
        var scroll_top = $(window).scrollTop();
        if ($(window).scrollTop() < 70) {
            $(".fixtopevent").css({
                top: $("#header").height() - scroll_top,
            });
        }
    });

</script> --}}
{{-- standar input --}}
<script>
    function standar(word) {
        dname = word;
        ss = dname.split(' ');
        dname = "";
        for (i = 0; i < ss.length; i++)
            if (ss[i].length > 0) {
                if (dname.length > 0) dname = dname + " ";
                dname = dname + ss[i].substring(0, 1);
                dname = dname + ss[i].substring(1).toLowerCase();
            }
        return dname;
    }

    function checkwords(word) {
        dname = word;
        ss = dname.split(' ');
        dname = "";
        for (i = 0; i < ss.length; i++) {
            if (ss[i].length == "") {
                return false;
            }
        }
        return true;
    }

</script>
{{-- event modal --}}
<script>
    $(document).ready(function() {
        $("#wantquestion").click(function() {
            $(".text-question-modal").focus();
        });
    });
    $(document).ready(function() {
        $("#button-close").click(function() {
            var content = $("textarea[name=content]").val();
            if (content.length <= 10 || checkwords(standar(content)) == false) {
                $("#btn-reset").delay(200).click();
            }
            $("#file-zone").stop(true, true).delay(200).fadeOut(300);
            $("input[name=add-file]").prop('checked', false);
        });
    });

</script>
{{-- validate form --}}
<script>
    $(document).ready(function() {
        $("#add-question").click(function(e) {
            e.preventDefault();
            var content = $("textarea[name=content]").val();
            if (content.length <= 10 || checkwords(standar(content)) == false) {
                sweetAlert({
                    title: "Oops!",
                    text: "Please check question, it not too short( < 10 characters, 3 words) or empty!",
                    type: "error",
                });
            } else {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var content = $("textarea[name=content]").val();
                $.ajax({
                    'url': '/NDT/public/ajax/question-uploads',
                    'type': 'POST',
                    'dataType': 'json',
                    'data': {
                        'content': content,
                    },
                    success: function(data) {
                        if (data.message == 'success') {
                            swal({
                                title: "Yepp!",
                                text: "Add question success!",
                                type: "success"
                            });
                            $(".btn-reset").delay(100).click();
                            $("#file-zone").stop(true, true).delay(200).fadeOut(300);
                            $("#button-close").delay(2000).click();
                        }
                    }
                });
                $(".fileinput-upload-button").click();
            }

        });
        $('#add-file').change(function() {
            if ($(this).is(':checked')) {
                $('#file-zone').stop(true, true).delay(200).fadeIn(500);
                $("#add-question").click(function() {
                    var content = $("textarea[name=content]").val();
                    if (content.length > 10 && checkwords(standar(content)) != false)
                        $(".fileinput-upload-button").click();
                });
            } else {
                $('#file-zone').stop(true, true).delay(200).fadeOut(500);
            }
        });
    });

</script>
{{-- event file-input --}}
<script>
    $("#file-1").fileinput({
        theme: 'fa',
        uploadUrl: '/NDT/public/ajax/question-uploads',
        allowedFileExtensions: ['jpg', 'png', 'gif', 'jpeg',
            'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'txt', 'pdf',
            'mp3', 'wav',
            'mp4', 'avi', 'mov', '3gp', 'wmv', 'webm', 'mkv', 'mpg'
        ],
        overwriteInitial: false,
        uploadAsync: true,
        maxFileSize: 100000,
        maxFilesNum: 10,
        mixFileCount: 10,
        showBrowse: false,
        showUpload: false,
        browseOnZoneClick: true,
        showAjaxErrorDetails: false,
        layoutTemplates: {
            actionUpload: "",
        },
        fileActionSettings: {
            'indicatorNew': '&nbsp;'
        }
    });

</script>
@endsection
