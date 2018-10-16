@extends('frontend.index')
@section('css')
<link rel="stylesheet" href="css/frontend/about.css">
@endsection
@section('content')
<div class="container">
	<div class="content-wrap">
		<br><br>
		<div class="main" >
			<div class="row">
				<div class="col-md-3 fixtopevent">
					@include('frontend.notification')
					@include('frontend.event')

				</div>
				<div class="col-md-8 content-right">
					<div class="card mb-3 ">
						<div class="card-header">
							<div class=""><i class="fas fa-user-tie"></i> My teams
							</div>
						</div>
						<div class="card-body card-tag-team">
							@foreach($admins as $admin)
							<div class="col-xs-6 col-sm-4 col-md-6 col-12">
								<div class="card team__item">
									<img src="http://byrushan.com/projects/super-admin/app/2.1.2/demo/img/contacts/4.jpg" class="team__img" alt="">

									<div class="card-body ">
										<h3 class="card-title">{{$admin->name}}</h3>
										<h4 class="card-info">
											<strong>Competence: </strong>
											@if($admin->aboutyou)
											{{$admin->aboutyou}}
											@else
											No record in the competence.
											@endif
										</h4>
										<h5 class="card-subtitle">
											<strong>Workplace: </strong>
											@if($admin->workplace)
											{{$admin->workplace}}
											@else
											No record in the workplace.
											@endif
										</h5>
										<p class="card-text">{{$admin->favouitequotes}}</p>

										<div class="team__social">
											<a 
											@if($admin->facebook)
											href="{{$admin->facebook}}" 
											target="_blank" 
											@endif
											><i class="fab fa-facebook-square" style="color: #3333CC; cursor: pointer;"></i></a>
											<a 
											@if($admin->instagram)
											href="{{$admin->instagram}}"
											target="_blank"  
											@endif
											><i class="fab fa-instagram" style="color: #212529;cursor: pointer;">
											</i></a>
											<a 
											@if($admin->email)
											href="mailto:{{$admin->email}}"
											@endif
											><i  class="fab fa-google" style="color: #c23321;cursor: pointer;">	
											</i></a>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection