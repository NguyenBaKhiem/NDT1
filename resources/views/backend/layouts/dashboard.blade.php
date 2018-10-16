@extends('backend.layouts.index')

@section('title')
Dashboard
@endsection

@section('breadcrumb')
Dashboard
@endsection
@section('content')
<br>
<link rel="stylesheet" href="css/dashboard.css">
@if(session('notify'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Hello, {{Auth::guard('admin')->user()->name}}!</strong> {{session('notify')}} <i class="ti-heart"></i><i class="ti-heart"></i><i class="ti-heart"></i>
</div>
@endif

<section id="main-content">
    <div class="row">
        <div class="col-sm-12" style="padding-left: 5px; padding-right: 5px;">
            <div class="card mb-3 ">
            <div class="card-header">
                <div class="">
                    <h4><i class="ti-dashboard"> </i> Dashboard</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="col-lg-4 col-md-4 col-sm-6" >
                    <div class="card-small" >
                        <div class="stat-widget-one animated shake" id="showuser">
                            <div class="stat-icon dib" style="cursor: pointer; "id="popover" ><i class="ti-user color-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text" >User</div>
                                <div class="stat-digit">100</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card-small">
                        <div class="stat-widget-one animated shake" id="showpost">
                            <div class="stat-icon dib"><i class="ti-notepad color-pink border-pink"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Post</div>
                                <div class="stat-digit">770</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card-small">
                        <div class="stat-widget-one animated shake" id="showconfesion">
                            <div class="stat-icon dib"><i class="ti-receipt color-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Confession</div>
                                <div class="stat-digit">961</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card-small">
                        <div class="stat-widget-one animated shake" id="showforum">
                            <div class="stat-icon dib"><i class="ti-comments"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Forum</div>
                                <div class="stat-digit">961</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card-small">
                        <div class="stat-widget-one animated shake" id="showview">
                            <div class="stat-icon dib"><i class="ti-eye border-success color-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">View</div>
                                <div class="stat-digit">1,012</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card-small">
                        <div class="stat-widget-one animated shake" id="showlike">
                            <div class="stat-icon dib"><i class="ti-thumb-up color-info"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Like</div>
                                <div class="stat-digit">1,012</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card-small">
                        <div class="stat-widget-one animated shake" id="showshare">
                            <div class="stat-icon dib"><i class="ti-share color-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text ">Share</div>
                                <div class="stat-digit">1,012</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card-small">
                        <div class="stat-widget-one animated shake">
                            <div class="stat-icon dib"><i class="ti-upload color-danger border-danger"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Upload</div>
                                <div class="stat-digit">2,781</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card-small">
                        <div class="stat-widget-one animated shake">
                            <div class="stat-icon dib"><i class="ti-download " ></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Download</div>
                                <div class="stat-digit">2,781</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- /# row -->
    </div>
</section>
@endsection
@section('script')

<script>
    $(document).ready(function() {

        $('#showuser').popover({title: "<h4>Report new user</h4>",
            content: "<p id=''>Today: </p><p id=''>Last day: </p><p id=''>two days before: </p><p id=''>This week: </p><p id=''>Last week: </p><p id=''>This month: </p><p id=''>Last month: </p><p id=''>This year: </p>",
            trigger: "hover", placement: "bottom", html: true});
        $('#showpost').popover({title: "<h4>Report new post</h4>",
            content: "<p id=''>Today: </p><p id=''>Last day: </p><p id=''>two days before: </p><p id=''>This week: </p><p id=''>Last week: </p><p id=''>This month: </p><p id=''>Last month: </p><p id=''>This year: </p>",
            trigger: "hover", placement: "bottom", html: true});
        $('#showconfesion').popover({title: "<h4>Report new confesion</h4>",
            content: "<p id=''>Today: </p><p id=''>Last day: </p><p id=''>two days before: </p><p id=''>This week: </p><p id=''>Last week: </p><p id=''>This month: </p><p id=''>Last month: </p><p id=''>This year: </p>",
            trigger: "hover", placement: "bottom", html: true});
        $('#showforum').popover({title: "<h4>Report quétion</h4>",
            content: "<p id=''>Today: </p><p id=''>This week: </p><p id=''>This month: </p><p id=''>This year: </p>",
            trigger: "hover", placement: "bottom", html: true});
        $('#showview').popover({title: "<h4>Report view</h4>",
            content: "<p id=''>Today: </p><p id=''>This week: </p><p id=''>This month: </p><p id=''>This year: </p>",
            trigger: "hover", placement: "bottom", html: true});
        $('#showlike').popover({title: "<h4>Report like</h4>",
            content: "<p id=''>Today: </p><p id=''>This week: </p><p id=''>This month: </p><p id=''>This year: </p>",
            trigger: "hover", placement: "bottom", html: true});
        $('#showshare').popover({title: "<h4>Report share</h4>",
            content: "<p id=''>Today: </p><p>This week: </p><p id=''>This month: </p><p id=''>This year: </p>",
            trigger: "hover", placement: "bottom", html: true});
    });
</script>

@endsection