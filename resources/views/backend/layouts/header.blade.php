<div class="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="" style="float: left">
					<div class="hamburger sidebar-toggle">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</div>
				</div>
				<div class="" style="float: right">
					<ul>
						<li class="header-icon dib"><i class="far fa-bell"></i>
							<div class="drop-down ">
								<div class="dropdown-content-heading ">
									<span class="text-left">Recent Notifications</span>
								</div>
								<div class="dropdown-content-body">
									<ul>
{{-- 										<li>
											<a href="#">
												<img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
												<div class="notification-content">
													<small class="notification-timestamp pull-right">02:34 PM</small>
													<div class="notification-heading">Mariam</div>
													<div class="notification-text">likes a photo of you</div>
												</div>
											</a>
										</li> --}}
										<li class="text-center">
											<a href="#" class="more-link">See All</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="header-icon dib"><i class="far fa-comments"></i>
							<div class="drop-down">
								<div class="dropdown-content-heading">
									<span class="text-left">2 New Messages</span>
									<a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
								</div>
								<div class="dropdown-content-body">
									<ul>
										{{-- 
										<li>
											<a href="#">
												<img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
												<div class="notification-content">
													<small class="notification-timestamp pull-right">02:34 PM</small>
													<div class="notification-heading">Mr. John</div>
													<div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
												</div>
											</a>
										</li> --}}

										<li class="text-center">
											<a href="#" class="more-link">See All</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="header-icon dib"><span class="user-avatar sidebar-collapse-icon">

							<?php
							$str =Auth::guard('admin')->user()->name;
							$name = explode(" ", $str);
							$len = count($name);
							echo substr($str, 0, 1).".".$name[$len -1];
							?>
							
							<i class="ti-angle-down f-s-10"></i></span>
							<div class="drop-down dropdown-profile">
								<div class="dropdown-content-body">
									<ul>
										<li><a href="admin/profile.html/name={{Auth::guard('admin')->user()->nameslug}}"><i class="ti-user"></i> <span>Profile</span></a></li>
										<li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>

										<li><a href="admin/lockscreen.html/id={{Auth::guard('admin')->user()->id}}"><i class="ti-lock"></i> <span>Lock Screen</span></a></li>
										<li><a href="logout.html"><i class="ti-power-off"></i> <span>Logout</span></a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
	<div class="title-margin-left p-l-0">	
		<div class="page-title">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="admin">Admin</a>
				</li>
				<li class="breadcrumb-item active">@yield('breadcrumb')</li>
			</ol>
		</div>
	</div>
</div>
