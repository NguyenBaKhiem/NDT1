@extends('frontend.index')
@section('css')
<link rel="stylesheet" href="css/frontend/document.css">
@endsection
@section('content')
<div class="container">
	<div class="content-wrap">
		<br><br>
		<div class="main" >
			<div class="row">
				<div class="alert alert-success successlogin">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Wellcome here!</strong> {{-- {{Auth::guard('admin')->user()->name}} --}}
				</div>
				<div class="col-md-8 content-right">
					<div class="card mb-3 ">
						<div class="card-header">
							<div class=""><i class="fas fa-pencil-alt"></i> Document
							</div>

						</div>
						<div class="card-body">
							<div class="row row-documents">
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-12 col-document">
									<div class="card box-shadow caption-style-4">
										<div class="body-image">
											<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" style=" height: 225px; width: 100%;display: block;" src="images/image1.jpg" data-holder-rendered="true">
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<h3>Math 10</h3>
													<strong>10+ images</strong>
												</div>
											</div>
											<div class="card-body">	
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												<div class="d-flex justify-content-between align-items-center">
												</div>
												<div class="btn-group">
													<a href="detail-document.html/name=" class="btn btn-sm btn-outline-secondary btn-default" id="ani1">Show more&#8811;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 fixtopevent">
					<div class="card mb-3 ">
						<div class="card-header">
							<div class=""><i class="fas fa-pencil-alt"></i> Categories
							</div>

						</div>
						<div class="card-body">
							<div class="sidebar-nav navbar-collapse">
								<ul class="nav nav-pills nav-stacked">
									<li class="active"><a> All documents</a></li>
									<li> <a data-toggle="collapse" data-target="#10" class="collapsed" ><span class="nav-label"> Class 10</span> <span class="fa fa-chevron-left pull-right"></span> </a>
										<ul class="collapse" id="10">
											<li><a href="#">Math</a></li>
											<li><a href="#">Physical</a></li>
											<li><a href="#">Chemistry</a></li>
											<li><a href="#">Literature</a></li>
											<li><a href="#">History</a></li>
											<li><a href="#">Geography</a></li>
											<li><a href="#">English</a></li>
										</ul>
									</li>
									<li> <a data-toggle="collapse" data-target="#11" class="collapsed" ><span class="nav-label"> Class 11 </span> <span class="fa fa-chevron-left pull-right"></span> </a>
										<ul class="collapse" id="11">
											<li><a href="#">Math</a></li>
											<li><a href="#">Physical</a></li>
											<li><a href="#">Chemistry</a></li>
											<li><a href="#">Literature</a></li>
											<li><a href="#">History</a></li>
											<li><a href="#">Geography</a></li>
											<li><a href="#">English</a></li>
										</ul>
									</li>
									<li> <a data-toggle="collapse" data-target="#12" class="collapsed" ><span class="nav-label"> Class 12 </span> <span class="fa fa-chevron-left pull-right"></span> </a>
										<ul class="collapse" id="12">
											<li><a href="#">Math</a></li>
											<li><a href="#">Physical</a></li>
											<li><a href="#">Chemistry</a></li>
											<li><a href="#">Literature</a></li>
											<li><a href="#">History</a></li>
											<li><a href="#">Geography</a></li>
											<li><a href="#">English</a></li>
										</ul>
									</li>
									<li> <a data-toggle="collapse" data-target="#college" class="collapsed" ><span class="nav-label"> College entrance exam </span> <span class="fa fa-chevron-left pull-right"></span> </a>
										<ul class="collapse" id="college">
											<li><a href="#">Math</a></li>
											<li><a href="#">Physical</a></li>
											<li><a href="#">Chemistry</a></li>
											<li><a href="#">Literature</a></li>
											<li><a href="#">History</a></li>
											<li><a href="#">Geography</a></li>
											<li><a href="#">English</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script>
	var url = window.location;
	var element = $('ul.nav li a').filter(function() {
		return this.href == url;
	}).addClass('active').parent().parent().addClass('in').parent();
	if (element.is('li')) {
		element.addClass('active');
	}
</script>
@endsection