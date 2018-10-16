@extends('frontend.index')
@section('css')
<link rel="stylesheet" href="css/frontend/confession.css">
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
				<div class="col-md-3 fixtopevent">
					@include('frontend.event')

				</div>
				<div class="col-md-8 content-right">
					<div class="card mb-3 ">
						<div class="card-header">
							<div class=""><i class="fas fa-pencil-alt"></i> Compose confession
							</div>

						</div>
						<div class="card-body">
							<h3 class="text-center"><strong>Confession Nguyen Duc Thuan High School</strong></h3> 
							<div class="alert alert-warning">
								<i class="ti-widget"></i> : Obligatory..
								<button class="btn btn-success" id="rule" style="float: right;padding: 0px 5px;">see rules</button>
							</div>
							<form enctype="multipart/form-data" id="form-confession" method="POST" action="">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<div class="body-confession row">
									<div class="form-group col-sm-8">
										<input type="text" class="form-control" placeholder="from:"
										@if(Auth::check())
										value="{{Auth::user()->name}}" 
										@endif
										>
									</div>
									<div class="form-group col-sm-8">
										<input type="text" class="form-control" placeholder="to:">
									</div>
								</div>
								<hr>
								<div>
									<div class="form-group text-user-confession col-sm-12">
										<div style="margin-bottom: 1%">
											Content confession: 										<sup class="bg-danger "> <i class="ti-widget"></i></sup>
										</div>
										<textarea tabindex="-1" rows="2" cols="1000" class="text-confession" id="modal-text-confession" name="content" placeholder="Stories, memories, concerns,... you want to share?"></textarea>
									</div>
								</div>
								<div class="form-group">
									<input type="checkbox" id="add-file" name="add-file">
									<label for="add-file"> <i class="ti-files"> Add images</i></label>
								</div>
								<div class="form-group" style="display: none;" id="file-zone">
									<div class="file-loading">
										<input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="0" name="attachment[]">
									</div>
								</div>
								<button type="reset" class="btn-reset" style="display: none;">Reset</button>
							</form>
							<button type="button" class="btn btn-lg btn-block btn-primary btn-post" name="post" >Post</button>
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
				if(ss[i].length == ""){
					return false;
				}
			}
			return true;
		}
	</script>
	{{-- event scroll--}}
	<script>
		$(document).ready(function() {
			$("#rule").click(
				function rule() {
					swal({
						imageUrl: '../public/images/rules.PNG',
						animation: false,
						customClass: 'animated tada'
					})
				}
				);
		});
		const swalWithBootstrapButtons = swal.mixin({
			confirmButtonClass: 'btn btn-success',
			cancelButtonClass: 'btn btn-danger',
			buttonsStyling: false,
		})

		swalWithBootstrapButtons({
			title: 'Are you sure?',
			text: "You need to read before writing confession!",
			imageUrl: '../public/images/rule.PNG',
			showCancelButton: true,
			confirmButtonText: 'Yes, i understood!',
			cancelButtonText: "No, i didn't understand!",
			reverseButtons: true
		}).then((result) => {
			if (result.value) {
				swalWithBootstrapButtons(
					'Yeep!',
					'Now, go to confession.',
					'success'
					)
			} else if (
    // Read more about handling dismissals
    result.dismiss === swal.DismissReason.cancel
    ) {
				swalWithBootstrapButtons(
					'Oops',
					'You can read my rules again :)',
					'error'
					)
			}
		})
	</script>

	{{-- event modal --}}
	<script>
		$(document).ready(function() {
			$(".text-user-confession").click(function() {
				$(".text-confession").focus();
			});
			$("#button-close").click(function() {
				var content = $("textarea[name=content]").val();
				if(content.length <=10 || checkwords(standar(content)) == false) {
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
			$(".btn-post").click(function(e) {
				e.preventDefault();
				var content = $("textarea[name=content]").val();
				if(content.length <=10 || checkwords(standar(content)) == false) {
					sweetAlert({
						title: "Oops!", 
						text: "Please check content confession, it isn't too short( < 10 character ) or empty!", 
						type: "error",
					});
				}
				else {
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					var content = $("textarea[name=content]").val();
					$.ajax({
						'url' : '/NDT/public/ajax/confession-uploads',
						'type' : 'POST',
						'dataType' : 'json',
						'data' :  {
							'content' : content,
						},
					})
					.done(function(data) {
						if (data.message == 'success') {
							swal({ 
								title :"Yepp!",
								text: "Add confession success!",
								type: "success"
							});
							$(".btn-reset").delay(100).click();
							$("#file-zone").stop(true, true).delay(200).fadeOut(300);
							$("#button-close").delay(2000).click();
						}
					});
					
					$(".fileinput-upload-button").click();
				}
			});
			$('#add-file').change(function() {
				if($(this).is(':checked')) {
					$('#file-zone').stop(true, true).delay(200).fadeIn(500);
					$("#add-confession").click(function() {
						var content = $("textarea[name=content]").val();
						if(content.length >10 && checkwords(standar(content)) != false) 
							$(".fileinput-upload-button").click();
					});
				}
				else {
					$('#file-zone').stop(true, true).delay(200).fadeOut(500);
				}
			});
		});
	</script>
	{{-- event file-input --}}
	<script>
		$("#file-1").fileinput({
			theme: 'fa',
			uploadUrl: '{{URL::to('/ajax/confession-uploads')}}',
			allowedFileExtensions: ['jpg', 'png', 'gif', 'jpeg'],
			overwriteInitial: false,
			uploadAsync: true,
			maxFileSize: 100000,
			maxFilesNum: 10,
			mixFileCount: 10,
			showBrowse: false,
			showUpload: false,
			browseOnZoneClick: true,
			showAjaxErrorDetails: false,
			layoutTemplates: {actionUpload: "",
		},
		fileActionSettings: {
			'indicatorNew': '&nbsp;'
		}
        //allowedFileTypes: ['image', 'video', 'flash'],
        // slugCallback: function (filename) {
        // 	return filename.replace('(', '_').replace(']', '_');
        // }
    });
</script>
@endsection
