<footer class="footer-distributed">
	<div class="footer-left">

		<h3>THPT.NDThuan<span> in my heart</span></h3>

		<p class="footer-links">
			<a href="home">Home</a>
			·
			<a href="about.html">About</a>
			·
			<a href="faq.html">FAQs</a>
			·
			<a href="privacypolicy.html">Privacy Policy</a>
			·
			<a href="termservices.html">Terms & services</a>
		</p>
		<div id='google_translate_element'></div>
		<script>
			function googleTranslateElementInit() {
				new google.translate.TranslateElement({
					pageLanguage: 'en',
					autoDisplay: 'true',
					layout: google.translate.TranslateElement.InlineLayout.SIMPLE
				}, 'google_translate_element');
			}
		</script>
		<script src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>
		<br>
		<p class="footer-company-name ">2018 &copy; . ADMIN PAGE TRUONG </p>
		<p class="footer-company-name ">
		THPT NGUYEN DUC THUAN </p>
		<hr style="" class="text-left">
		<p class="footer-company-name ">
			Design by <a href="https://www.facebook.com/conmua.duoinhung.11221402" class="footer">Yuki Khiêm Nguyễn</a>
		</p>
	</div>

	<div class="footer-center">

		<div>
			<i class="fas fa-map-marker-alt"></i> 
			<p><span>Thanh Loi Ward, </span><span>Vu Ban District, Nam Dinh Province, Viet Nam</p>
			</div>

			<div>
				<i class="fas fa-phone"></i>
				<p><a href="tel:01647914422" {{-- class="glyphicon glyphicon-phone-alt" --}}>01647914422</a></p>
			</div>

			<div>
				<i class="fas fa-envelope"></i>
				<p><a href="mailto:thptnguyenducthuan123vbnd@gmail.com"><span>supportndt@page.com</span></a></p>
			</div>

		</div>

		<div class="footer-right">

			<p class="footer-company-about">
				<span>About us</span>
				We are the admin team of Nguyen Duc Thuan high school. We are not only dynamic, funny but also always listen to what you say. If you have concerns, the stories, memories,... please contact us for advice. Let us be your confidante. ^_^ ^_^
			</p>

			<div class="footer-icons">

				<a href="https://www.facebook.com/ndtvbnd/"><i class="ti-facebook"></i></a>
				<a><i class="ti-twitter-alt"></i></a>
				<a><i class="ti-linkedin"></i></a>
				<a><i class="ti-youtube"></i></a>
				<a><i class="ti-skype"></i></a>
			</div>

		</div>
	</footer>

	<div class="scroll-icon animated" id="scrollToTop"><i class="ti-rocket"></i></div>

	@section('script')

	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function(){
				if($(window).scrollTop() + $(window).height() == $(document).height()) {
					$('#scrollToTop').addClass('bounce');
				}
				if($(this).scrollTop() > 100){
					$('#scrollToTop').fadeIn();
				}
				else{
					$('#scrollToTop').fadeOut();
				}
			});
			$('#scrollToTop').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 400);
				return false;
			});
		});
	</script>

	@endsection