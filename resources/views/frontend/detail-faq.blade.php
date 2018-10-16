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
							<div class=""><i class="far fa-question-circle" style="color: #F1AF00;"></i> {{$support->title}}
							</div>
						</div>
						<div class="card-body row">
							<div class="body-faq col-sm-12">
								<div class="col-sm-12 read-more-question">
									<strong>Question: </strong>
									<?php
									$content = trim($support->content) ;
									$lenct = strlen($content);
									if($content[$lenct-1] == "?")
										echo $content;
									else
										echo $content." ?";
									?>
								</div>
								<div class="col-sm-12">
									<strong>Answer: </strong>
									<span class="read-more-answer" style="display: none;">{!!$support->answer!!}</span>
								</div>
							</div>
							<div class="random-supports col-sm-12">
								@include('frontend.component-search-key')
								<h3>some other posts:</h3>
								<div class="col-sm-12 lists-support">
									@foreach($random_supports as $key => $random_support)
									<li class="list-support"><a href="detail-faq.html/question_id={{$random_support->id}}&title={{str_slug($random_support->title)}}">
										<?php
										$content = trim($random_support->content) ;
										$lenct = strlen($content);
										if($content[$lenct-1] == "?")
											echo $content;
										else
											echo $content." ?";
										?>
									</a></li>
									@endforeach
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
<script type="text/javascript" src="js/lib/standard.js"></script>
<script>
	autosize(document.querySelectorAll('textarea'));
</script>
<script>
	function upCaseOne(word) {
		return word.charAt(0).toUpperCase() + word.slice(1);
	}
	function wordLess(word, s) {
		count = 0;
		for(i = 0; i < word.length; i++) {
			if(word[i] ===" ") {
				count++;
				if(count === s) {
					word = word.substring(0, i)+ " ... ";
					return word;
				}
			}
		}
	}
	$(document).ready(function() {
		$(".read-more-answer").fadeIn();
		var readMoreHtml = $(".read-more-answer").html();
		var lessText = wordLess(standar(readMoreHtml), 30);
		if(readMoreHtml.length > 120) {
			lessText = upCaseOne(lessText);
			$(".read-more-answer").html(lessText).append('<a href=" " class="read-more-link"> Show more <i class="fas fa-angle-up"></i></a>');
		} else {
			$(".read-more-answer").html(readMoreHtml);
		}
		$("body").on('click', '.read-more-link', function (e) {
			e.preventDefault();
			$(this).parent(".read-more-answer").show('slow').html(readMoreHtml).append('<a class="read-less-link"> Show less <i class="fas fa-angle-up"></i></a>');
		});
		$("body").on('click', '.read-less-link', function (e) {
			e.preventDefault();
			lessText = upCaseOne(lessText);
			$(this).parent(".read-more-answer").html(lessText).append('<a class="read-more-link"> Show more <i class="fas fa-angle-down"></a>').fadeIn(1000);
		});
	});	
</script>
<script src="js/lib/component-search-key.js"></script>
@endsection