@extends('backend.layouts.index')
@section('title')
List admin
@endsection
@section('breadcrumb')
List admin
@endsection
@section('content')
<section id="main-content">
	<div class="row">
		<div class="col-sm-12" style="padding-left: 5px; padding-right: 5px; margin-top: 14px" >
			<div class="card mb-3 ">
				<div class="card-header">
					<div class="">
						<h4><i class="fas fa-user-tie"> </i> Admin</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="bootstrap-data-table-panel">
						<div class="table-responsive">
							<div class="table-inverse">

								<table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
									<thead>
										<tr >
											<th>Num</th>
											<th>ID</th>
											<th>Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Alias</th>
											<th>Gender</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody id="admin-info">	
										@foreach($admin as $key => $ad)			
										<tr align="center" id="{{$ad->id}}">
											<td>{{$key+1}}</td>
											<td>{{$ad->id}}</td>
											<td>{{$ad->name}}</td>
											<td>{{$ad->email}}</td>
											{{-- <td><a href="{{$ad->facebook}}" target="_blank">{{substr($ad->facebook, 25, strlen($ad->facebook))}}</a></td> --}}
											<td>{{$ad->phone}}</td>
											<td>{{$ad->alias}}</td>
											<td>{{$ad->gender}}</td>
											<td class="center">
												<a 
												@if(Auth::guard('admin')->user()->dominion !=1)
												style="cursor: no-drop;"
												@else
												{{-- href="admin/admin/edit/id={{$ad->id}}" --}}
												style="cursor: pointer;" 
												class="btn-edit" id="{{$ad->id}}"
												@endif
												><i class="ti-pencil"></i> Edit</a>
											</td>
											<td class="center">
												<a
												@if(Auth::guard('admin')->user()->dominion !=1)
												style="cursor: no-drop;"
												@else
												{{-- href="admin/admin/delete/id={{$ad->id}}" --}}
												style="cursor: pointer;" 
												class="btn-delete" id="{{$ad->id}}"
												@endif
												><i class="ti-trash"></i> Delete</a>
											</td>
										</tr>
										@endforeach
									</tbody>
									<tfoot>
										<tr align="center">
											<th>Num</th>
											<th>ID</th>
											<th>Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Alias</th>
											<th>Gender</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->
	<div class="modal fade " id="editModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Edit</h4>
				</div>
				<div class="modal-body">
					<form action="" class="form-horizontal" id="form-edit" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-group">
							<label for="" class="control-label">
								Name:
							</label>
							<input type="text" class="form-control" id="name" name="name"
							onblur="javascript: this.value = NameStandard(this.value);">
							<small class="error errorname text-danger" id="error"></small>
						</div>
						<div class="form-group">
							<label for="" class="control-label" >
								Email:
							</label>
							<input type="text" class="form-control" id="email" name="email" disabled="">
							<small class="error erroremail text-danger" id="error"></small>
						</div>
						<div class="form-group">
							<label for="" class="control-label" >
								Phone:
							</label>
							<input type="text" class="form-control" id="phone" name="phone">
							<small class="error errorphone text-danger" id="error"></small>
						</div>
						<div class="form-group">
							<label for="" class="control-label" >
								Alias:
							</label>
							<input type="text" class="form-control" id="alias" name="alias">
							<small class="error erroralias text-danger" id="error"></small>
						</div>
						<div class="form-check">
							<label for="" class="control-label" >
								Gender:
							</label>
							<p>
								<input type="radio" value="male" name="gender"> Male
								<input type="radio" value="female" name="gender"> Female
							</p>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-warning btn-sm" id="change-dominion">
								Change dominion
							</button>
							<button type="button" class="btn btn-default btn-sm" id="cancel-dominion" style="display: none;">
								Cancel change
							</button>
							<select name="dominion" id="dominion" disabled="" style="cursor: no-drop;">
								<option disabled="">-------</option>
								<option value="1">Pro admin</option>
								<option value="0">Normal admin</option>
							</select>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success update-admin" id="">Update</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>
	<div class="modal fade " id="deleteModal" role="dialog">
		<div class="modal-dialog modal-sm">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Delete</h4>
				</div>
				<div class="modal-body">
					<h4 class="text-warning" align="center">Do you want delete admin ?</h4>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success comfirm-delete">Delete</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>
</section>
@endsection
@section('script-list-admin')
<script src="js/lib/standard.js"></script>
<script>
	$(document).ready(function() {
		$("body").delegate('.btn-edit','click', function() {
			var id = $(this).attr('id');
			$.get("{{ URL::to('/admin/edit/admin.html')}}", {id:id}, function (data) {
				$("input[name=name]").val(data.name);
				$("input[name=email]").val(data.email);
				$("input[name=phone]").val(data.phone);
				$("input[name=alias]").val(data.alias);
				var gender = data.gender;
				if (gender == 'male') {
					$("input[name=gender][value=male]").prop("checked",true);
				} else if(gender == 'female') {
					$("input[name=gender][value=female]").prop("checked",true);
				}
				$("#dominion").val(data.dominion);
			})
			$("#editModal").modal('show');
		});
		$("body").delegate('.btn-delete', 'click', function() {
			var id = $(this).attr('id');
			$("#deleteModal").modal('show');
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$(".comfirm-delete").click(function() {
				$.post("{{ URL::to('/admin/delete')}}", {id:id}, function (data) {
					if(data.error == true) {
						swal({
							title: 'Oops...',
							text: data.message,
							type: 'error',
						})
					} else {
						$('#admin-info tr#'+ id).remove();
						swal({ 
							title :"Deleted!",
							text: "admin has been deleted.",
							type: "success"
						});
					}
				});
				$("#deleteModal").modal('hide');	
			});
		});
	});
</script>

<script>
	$(document).ready(function() {
		$("#change-dominion").click(function() {
			$("#dominion").removeAttr('disabled');
			$("#dominion").css({
				cursor: 'pointer',
			});
			$("#change-dominion").hide();
			$("#cancel-dominion").fadeIn('slow');
		});
		$("#cancel-dominion").click(function() {
			$("#dominion").attr('disabled', true);
			$("#dominion").css({
				cursor: 'no-drop',
			});
			$("#cancel-dominion").hide();
			$("#change-dominion").fadeIn('slow');

		});
		$(".update-admin").click(function() {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			// var id = $(".btn-edit").attr('id');
			var name = $("input[name=name]").val();
			var email = $("input[name=email]").val();
			var facebook = $("input[name=facebook]").val();
			var phone = $("input[name=phone]").val();
			var alias = $("input[name=alias]").val();
			var gender = $('[name=gender]:radio:checked').val();
			var dominion = $("#dominion").val();
			$.ajax({
				'url' : '{{ URL::to('admin/edit/admin.html')}}',
				'type' : 'POST',
				'dataType' : 'json',
				'data' :  {
					'name' : name ,
					'email' : email ,
					'facebook' : facebook ,
					'phone' : phone ,
					'alias' : alias ,
					'gender' : gender,
					'dominion' : dominion ,
				},
				success: function (data) {
					if (data.error ==true) {
						if (data.message.name != undefined) {
							$(".errorname").show().text(data.message.name[0]);
							$(".errorname").fadeOut(4000);
						}
						if (data.message.phone != undefined) {
							$(".errorphone").show().text(data.message.phone[0]);
							$(".errorphone").fadeOut(4000);
						}
						if (data.message.alias != undefined) {
							$(".erroralias").show().text(data.message.alias[0]);
							$(".erroralias").fadeOut(4000);
						}

					}




					if(data.error == false) {
						swal({ 
							title :"Yepp!",
							text: "Informations has been successfully updated!",
							type: "success"
						});
						var tr = (
							'<tr align="center" id="' +data.admin.id+'" role="row">' +
							'<td class="sorting_1">' + data.admin.id +'</td>' +
							'<td>'+ data.admin.id +'</td>' +
							'<td>'+ data.admin.name +'</td>' +
							'<td>'+ data.admin.email +'</td>' +
							'<td>'+ data.admin.phone +'</td>' +
							'<td>'+ data.admin.alias +'</td>' +
							'<td>'+ data.admin.gender +'</td>' +
							'<td class="center">' +
							'<a style="cursor: pointer;"' +
							'class="btn-edit" id="'+ data.admin.id +'">'+
							'<i class="ti-pencil"></i> Edit</a>' +
							'</td>' +
							'<td class="center">' +
							'<a style="cursor: pointer;"' +
							'class="btn-delete" id="'+ data.admin.id +'">'+
							'<i class="ti-trash"></i> Delete</a>' +
							'</td>' +
							'</tr>' 
							);
						$('#admin-info tr#'+data.admin.id).replaceWith(tr);
						$("#editModal").modal('hide');
					}			
				}
			});
		});
	});
</script>
@endsection