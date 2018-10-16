<div class="form-search-support">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="input-group">
		<input type="text" class="form-control search-key-support" name="search-key-support" placeholder="Hi<?php if(Auth::check()) echo " ".Auth::user()->name  ?>, how can we help?"
		onblur="javascript: this.value = standar(this.value);">
		<div class="input-group-btn">
			<button class="btn btn-default btn-search-support" type="button" data-toggle="modal" id="btn-search-support">
				<i class="glyphicon glyphicon-search " style="color: #EEDD82"></i>
			</button>
		</div>
	</div>
	<div class="modal fade" id="supportModal" role="dialog">
		<div class="modal-dialog modal-lg modal-customize">
			<div class="modal-content">
				<div class="modal-header header-search-result">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Search results</h4>
				</div>
				<div class="modal-body body-search-result">
					<div class="modal-body-form">
						<h2 class="text-center modal-search-title" style="font-family: Akronim">Yukikhiem.vn</h2>
						<form action="">
							<div class="input-group">
								<input type="text" class="form-control modal-key-support" name="modal-key-support" value="">
								<div class="input-group-btn">
									<button class="btn btn-default btn-search-support" type="button">
										<i class="glyphicon glyphicon-search " style="color: #EEDD82"></i>
									</button>
								</div>
							</div>
							<button type="reset" style="display: none;" class="reset-modal-key"></button>
						</form>
					</div>	
					<div class="result-from-key ">
						<div class="count-result">

						</div>
						<div class="loading-result">
							<img src="{{asset('images/loading/heartloading.gif')}}" alt="loading..." width="200">
							<p class="page-result"></p>
						</div>
						<div class="result-key"></div>
					</div>									
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>