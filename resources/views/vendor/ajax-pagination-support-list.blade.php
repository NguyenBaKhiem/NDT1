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