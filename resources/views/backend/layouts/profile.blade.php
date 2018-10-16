@extends('backend.layouts.index')

@section('title')
Profile
@endsection
Profile
@section('breadcrumb')
Dashboard
@endsection
@section('content')
<link rel="stylesheet" href="css/lib/lightgallery.css">
<section id="main-content">
	<div class="wrapper">
		<div class="row">
			<div class="col-md-12 box-border" style="padding-left: 5px; padding-right: 5px; margin: 13px 5px 0px 5px;">
				<header id="header">

					<div class="slider">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="http://placehold.it/1200x400/F34336/F34336&text=WORDPRESS THEME DEVELOPER" style="cursor: pointer;">
								</div>
								<div class="item">
									<img src="http://placehold.it/1200x400/20BFA9/ffffff&text=CLEAN %26 SMART" style="cursor: pointer;">
								</div>
							</div>
							<!-- Controls -->
							<a class="left carousel-control" href="#carousel-example-generic" role="button" id="controlpre" data-slide="prev">
								<br>
								<span class="ti-camara" aria-hidden="true" id="change-cover-photo"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" role="button" id="controlnex" data-slide="next">
								<br>
								<span {{-- class="ti-angle-right" --}} aria-hidden="true">&#8602;</span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div><!--slider-->
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">

							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="demo-gallery">
								<div id="lightgallery" class="list-unstyled">
									<div data-src="images/imagendthuan.jpg" data-sub-html="<big>{{Auth::guard('admin')->user()->name}}</big><p>{{Auth::guard('admin')->user()->aboutyou}}</p>">
										<a href="images/imagendthuan.jpg" class="navbar-brand">
											<img class="img-responsive" src="images/imagendthuan.jpg" >
										</a>
									</div>
								</div>
							</div>
							{{-- <span class="site-name"><b>{{Auth::guard('admin')->user()->name}}</b> @if(Auth::guard('admin')->user()->alias)
								<p>({{Auth::guard('admin')->user()->alias}})</p>
								@endif
							</span> --}}
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="mainNav" >
							<ul class="nav main-menu navbar-nav">
								<li><a id="post"><i class="fas fa-book"></i> Post</a></li>
								<li><a id="about"><i class="far fa-address-card"></i> About</a></li>
								<li><a id="changecover"><i class="far fa-images"></i> Change cover</a></li>
							</ul>

							<ul class="nav  navbar-nav navbar-right" style="font-size:20px">
								<li><a
									@if(Auth::guard('admin')->user()->facebook)
									href="{{Auth::guard('admin')->user()->facebook}}"
									@endif
									><i class="fab fa-facebook-square" style="color: #3333CC;cursor: pointer;"></i>
								</a></li>
								<li><a 
									@if(Auth::guard('admin')->user()->instagram)
									href="{{Auth::guard('admin')->user()->instagram}}"
									@endif
									><i class="fab fa-instagram" style="color: #212529; cursor: pointer;"></i>
								</a></li>
								<li><a 
									@if(Auth::guard('admin')->user()->twitter)
									href="{{Auth::guard('admin')->user()->twitter}}"
									@endif
									><i class="fab fa-twitter" style="color: #1da1f2; cursor: pointer;"></i>
								</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</header><!--/#HEADER-->
			</div>
		</div>
		<br>
		<div class="maincontent" id="maincontent">
			{{-- <div class="row">
				<div class="col-sm-10" style="padding-left: 0px; padding-right: 0px;">
					<div class="content-left ">
						<div class=" page-title">
							<h3><i class="fas fa-user"> About</i></h3>

						</div>
						<div class="box">
							quurqrur
						</div>
					</div>
					@include('backend.layouts.layoutcontent.about')
				</div>
				<div class="col-sm-2" style="padding-left: 0px; padding-right: 0px;">
					<div class="content-right">
						<div class=" page-title">
							<h3><i class="fas fa-user-friends"> Friend</i></h3>

						</div>
						<div class="box">
							quurqrur
						</div>
					</div>
				</div>
			</div> --}}
		</div>
	</div>

</section>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('#lightgallery').lightGallery();
	});
</script>
<script src="js/lib/lightgallery-all.min.js"></script>
<script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-36251023-1']);
	_gaq.push(['_setDomainName', 'jqueryscript.net']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

</script>
<script>
	$(document).ready(function() {
		$("#about").click(function() {
			$("#maincontent").load('./layoutcontent/about.blade.php');
		});
	});
</script>
@endsection