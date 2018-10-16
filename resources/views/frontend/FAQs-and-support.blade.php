@extends('frontend.index')
@section('css')
<link rel="stylesheet" href="css/frontend/FAQsandsupport.css">
@endsection
@section('content')
<div class="container">
	<div class="content-wrap">
		<br><br>
		<div class="main" >
			<div class="row">
				<div class="col-md-4 fixtopcontact">
					@include('frontend.support')

				</div>
				<div class="col-md-7 content-right">
					<div class="card mb-3 ">
						<div class="card-header">
							<div class=""><i class="far fa-question-circle" style="color: #F1AF00;"></i> Frequently Asked Questions
							</div>
						</div>
						<div class="card-body">
							@include('frontend.component-search-key')
							<div class="loading">
								<img src="{{asset('images/loading/heartloading.gif')}}" alt="loading..." width="200">
								<p class="page-support"></p>
							</div>
							<div class="col-sm-12 lists-support ">
								
								@foreach($supports as $key => $support)
								<li class="list-support"><a href="detail-faq.html/question_id={{$support->id}}&title={{str_slug($support->title)}}">
									<?php
									$content = trim($support->content) ;
									$lenct = strlen($content);
									if($content[$lenct-1] == "?")
										echo $content;
									else
										echo $content." ?";
									?>
								</a></li>
								@endforeach
								<div class="text-center paginate-question">
									{!! $supports->links()!!}
								</div>
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
</script>
{{-- autosize for textarea --}}
<script src="js/lib/autosizetextarea/autosize.min.js"></script>
<script>
	autosize(document.querySelectorAll('textarea'));
</script>
{{-- standard for text--}}
<script type="text/javascript" src="js/lib/standard.js"></script>
{{-- get list support --}}
<script>
	var loading = $(".loading").hide();
	$(document).on('click', '.paginate-question a', function(e) {
		loading.hide();
		e.preventDefault();
		var page = $(this).attr('href').split('page=')[1];
		var currentURL = window.location.href;
		currentURL = currentURL + "?page=" + page;
		getListSupport(page);
		console.log(currentURL);
	});
	$(".lists-support")
	.ajaxStart(function () {
		loading.show();
	})
	.ajaxStop(function () {
		loading.hide();
	});
	function getListSupport(page) {
		$.ajax({
			url: '{{ URL::to('/ajax/getlistsupport?page=')}}' + page,
			timeout: 4000,
				// beforeSend: function(){
				// 	$(".lists-support img").show();
				// },
				// success: function (data) {
				// 	$(".lists-support img").hide();
				// }
				statusCode: {
					500: function () {
						loading.show();
						$(".page-support").html('Internal Server Error, please try again.');
						console.clear();
					},
					508: function () {
						loading.show();
						(".page-support").html('Resource Limit is Reached, please try again.');
						console.clear();
					}
				}
			})
		.done(function(data) {
			$(".lists-support").html(data);
		})
		.fail(function(data){
			loading.show();
			$(".page-support").html('Server timeout or unknow errors, please try again.');
			console.clear();
		});

	}
</script>
<script src="js/lib/component-search-key.js"></script>
@endsection