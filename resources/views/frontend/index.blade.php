
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Trường THPT Nguyễn Đức Thuận, THPT Nguyễn Đức Thuận, Trường cấp 3 Nguyễn Đức Thuận, Trường Nguyễn Đức Thuận Confession, Confession Nguyễn Đức Thuận, Nguyễn Đức Thuận chia sẻ, Nguyễn Đức Thuận document, Nguyễn Đức Thuận question, Nguyễn Đức Thuận câu hỏi, Nguyễn Đức Thuận chat, Nguyễn Đức Thuận giúp đỡ">
	<meta name="description" content="Yukikhiem.vn - web học hỏi, chia sẻ tài liệu, thông tin cần thiết, chia sẻ cảm xúc, liên kiết thành viên đã và đang học tại trường THPT Nguyễn Đức Thuận. Cùng tham gia công đồng để tiến lại gần nhau hơn nào. ^^ ">
	<title>THPT Nguyễn Đức Thuận | @yield('title')</title>
	<base href="{{asset('')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.bootcss.com/hover.css/2.3.1/css/hover-min.css">
	<link rel="stylesheet" href="css/lib/bootstrap-social.css">
	<link href="css/lib/uploadmultifile/fileinput.css" media="all" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link href="css/lib/themify-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="css/frontend/header.css">
	<link rel="stylesheet" href="css/lib/sweetalert/sweetalert.css">
	<link rel="stylesheet" href="css/frontend/home.css">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@yield('css')
	<link rel="stylesheet" href="css/frontend/form-wizard-blue.css">
</head>
<body>
	<div id="header">
		@include('frontend.header')
	</div>
	<div class=" page-facebook" >
		<div class="">
			<i class="ti-close close-btn"></i>
		</div>
		<div class="fb-page" data-href="https://www.facebook.com/ndtvbnd/" data-small-header="false" data-adapt-container-width="true" data-adapt-container-high="true" data-hide-cover="false" 
		data-show-facepile="true" data-hide-cta="true" data-tabs="events, timeline, messages" data-height="365" style="display: none;" 
		>
		<blockquote cite="https://www.facebook.com/ndtvbnd/" class="fb-xfbml-parse-ignore">
			<a href="https://www.facebook.com/ndtvbnd/">Trường THPT Nguyễn Đức Thuận</a>
		</blockquote>
	</div>
	<i class="ti-angle-double-right open-btn"> </i>
</div>
<div class="content-wrap">
	<br>
	<div class="main" >
		@yield('content')
	</div>
</div>
<div class="scrollbar" id="style-15">
	<div class="force-overflow"></div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=116773615695121&autoLogAppEvents=1';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/lib/sweetalert/sweetalert2.all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/piexif.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/sortable.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/purify.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="js/lib/uploadmultifile/fileinput.js" type="text/javascript"></script>
@yield('script-header')
@yield('script')
@yield('page-plugin')
</body>
</html>
