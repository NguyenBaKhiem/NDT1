@extends('backend.layouts.index')

@section('title')
Change Password
@endsection

@section('breadcrumb')
ChangePass
@endsection

@section('content')
{{-- @if(session('notify'))
<div class="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Title!</strong> Alert body ...
</div> --}}
<section id="main-content">
	<div class="wrapper box-border">
		<div class="row" {{-- id="box-border" --}}>
			<div class="col-lg-12" id="titlecontent">
				<h1 class="page-header">Change Password: 
					<small>{{Auth::guard('admin')->user()->name}}</small>
				</h1>
			</div>
			<div class="col-lg-10 col-lg-offset-1" style="padding-bottom:120px">
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					@foreach($errors->all() as $error)
					<strong>Fail!</strong> {{$error}}
					<br>
					@endforeach
				</div>
				@endif
				@if(session('notify'))
				<div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Warning!</strong> {{session('notify')}}
				</div>
				@endif
				@if(session('success'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Success!</strong> {{session('success')}}
				</div>
				@endif
				<form action="admin/changepassword.html/name={{Auth::guard('admin')->user()->nameslug}}" method="POST" role="form">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label>Current password:</label>
						<input type="text" class="form-control" placeholder="Enter current password." name="oldpassword" id="oldpassword" />
					</div>
					<div class="form-group">
						<label>New password:</label>
						<input type="text" class="form-control" placeholder="Enter new password." name="newpassword" id="newpassword" />
					</div>
					<div class="form-group">
						<label>Password comfirm:</label>
						<input type="text" class="form-control" placeholder="Enter password comfirm." name="comfirmpassword" id="comfirmpassword" />
					</div>
					<button type="submit" class="btn btn-success col-md-offset-2" id="btnchange">Change password</button>
					<button type="reset" class="btn btn-default col-md-offset-4">Reset</button>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection

{{-- @section('script')
<script>
	$(document).ready(function() {
		// $.ajaxSetup({
		// 	headers: {
		// 		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		// 	}
		// });
		// $("#change").click(function() {
		// 	$.$.ajax({
		// 		type: 'POST',
		// 		url: '/admin/changepassword.html/name={{Auth::guard('admin')->user()->nameslug}}',
		// 		'data': {
		// 			'oldpassword' : $('#oldpassword').val(),
		// 			'newpassword' : $('#newpassword').val(),
		// 			'comfirmpassword' : $('#comfirmpassword').val(),
		// 		},
		// 		success: function (data) {
		// 			console.log(data);

		// 		}
		// 	});

		// });
		if($(".alert").style.display==="none") {
			$(".alert").addClass('hinge');
		}
	});
</script>
@endsection --}}