@extends('backend.layouts.index')
@section('title')
List admin
@endsection
@section('breadcrumb')
Contact
@endsection
@section('content')

<section id="main-content">
	<div class="row">
		<div class="col-sm-12" style="padding-left: 5px; padding-right: 5px; margin-top: 13px">
			<div class="card mb-3 ">
				<div class="card-header">
					<div class="">
						<h4><i class="far fa-envelope"> </i> Contact:</h4>
					</div>
				</div>
				<div class="card-body">
{{-- 					<div class="inbox-head">
						<form action="#" class="pull-right position">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search">
								<div class="input-group-btn">
									<button class="btn btn-default btn-research" type="submit">
										<i class="glyphicon glyphicon-search " style="color: #EEDD82"></i>
									</button>
								</div>
							</div>
						</form>
					</div> --}}
					<div class="compose-email">
						<div class="mail-box">
							<div class="row">
								<div class="col-md-3">
									<div class="inbox-body text-center">
										<button href="#myModal" data-toggle="modal" title="Compose" class="btn btn-compose button"> Compose</button>
										<!-- Modal -->
										<div class="modal fade" id="myModal" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Send mail</h4>
													</div>
													<div class="modal-body">
														<form class="form-horizontal">
															<div class="form-group">
																<div class="col-sm-12">
																	<input type="text" id="email" class="form-control" placeholder="email">
																</div>
															</div>
															<div class="form-group">
																<div class="col-sm-12">
																	<input type="text" id="subject" class="form-control" placeholder="subject">
																</div>
															</div>
															<div class="form-group">
																<div class="col-sm-12">
																	<textarea tabindex="-1" rows="3" cols="1000" class="text-question" placeholder="content..."></textarea>
																</div>
															</div>

															<div class="form-group">
																<div class="col-sm-12">
																	<span class="btn green fileinput-button"><i class="fa fa-plus fa fa-white"></i>
																		<span>Attachment</span>
																		<input type="file" name="files[]" multiple="">
																	</span>
																</div>
															</div>
															<div class="form-group">
																<div class="col-sm-8">
																	<button class="btn btn-success btn-block" type="submit" id="send" style="margin-bottom: 1%">Send</button>
																</div>
																<div class="col-sm-4">
																	<button class="btn btn-info btn-block" type="submit">Save to draft</button>
																</div>
															</div>
														</form>
													</div>

													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>
												</div>

											</div>
										</div>
										<!-- /.modal -->
									</div>
								</div>
								<div class="col-md-9">
									<div class="mail-option">
										<div class="chk-all chk-group">
											<input type="checkbox" class="mail-checkbox mail-group-checkbox" id="checkAll" />
											<div class="btn-group">
												<a data-toggle="dropdown" href="#" class="btn mini all m-l-10" aria-expanded="false">All<i class="fa fa-angle-down "></i></a>
												<ul class="card-option-dropdown dropdown-menu">
													<li><a href="#"> None</a></li>
													<li><a href="#"> Read</a></li>
													<li><a href="#"> Unread</a></li>
												</ul>
											</div>
										</div>
										<div class="btn-group hidden-phone">
											<a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false"> More<i class="fa fa-angle-down "></i></a>

											<ul class="card-option-dropdown dropdown-menu">
												<li><a href="#"><i class="ti-pencil"></i> Mark as Read</a></li>
												<li><a href="#"><i class="ti-trash"></i>Delete</a></li>
											</ul>
										</div>
										<div class="btn-group btn-move">
											<a data-toggle="dropdown" href="#" class="btn mini blue">Move to<i class="fa fa-angle-down "></i></a>
											<ul class="card-option-dropdown dropdown-menu">
												<li><a href="#">Draft</a></li>
												<li><a href="#">Spam</a></li>
											</ul>
										</div>

										<ul class="unstyled inbox-pagination pagination-list">
											<li><span>1-50 of 234</span></li>
											<li>
												<a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
											</li>
											<li>
												<a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="group-tabs">
									<div class="col-sm-3">
										<ul class="nav nav-stacked  inbox-nav" role="tablist">
											<li role="presentation" class="active breadcrumb-item hvr-shadow-radial">
												<a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-inbox"></i> Inbox 
													<span class="badge badge-success pull-right m-t-12">
														2
													</span>
												</a>
											</li>
											<li role="presentation" class="hvr-shadow-radial">
												<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-envelope-o"></i> Sent Mail
												</a>
											</li>
											<li role="presentation" class="hvr-shadow-radial">
												<a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-bookmark-o"></i> Important
												</a>
											</li>
											<li role="presentation" class="hvr-shadow-radial">
												<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class=" fa fa-external-link"></i> Drafts <span class="badge badge-info pull-right m-t-12">30</span>
												</a>
											</li>
										</ul>
									</div>
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane col-sm-9 active" id="home">
											<div class="table-responsive">
												<table class="table table-inbox table-hover table-responsive .table-box-shadow">
													<tbody>
														<tr class="unread">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="ti-star"></i></td>
															<td class="view-message  dont-show">PHPClass</td>
															<td class="view-message ">Added a new class: Login Class Fast Site</td>
															<td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
															<td class="view-message  text-right">9:27 AM</td>
														</tr>
														<tr class="unread">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="ti-star"></i></td>
															<td class="view-message dont-show">Google Webmaster </td>
															<td class="view-message">Improve the search presence of WebSite</td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">March 15</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="ti-star"></i></td>
															<td class="view-message dont-show">JW Player</td>
															<td class="view-message">Last Chance: Upgrade to Pro for </td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">March 15</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="ti-star inbox-started"></i></td>
															<td class="view-message dont-show">Freelancer.com <span class="badge badge-danger pull-right m-t-6">urgent</span></td>
															<td class="view-message">Stop wasting your visitors </td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">May 23</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="profile">
											<div class="table-responsive">
												<table class="table table-inbox table-hover table-responsive">
													<tbody>
														<tr class="unread">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="ti-star"></i></td>
															<td class="view-message  dont-show">PHPClass</td>
															<td class="view-message ">Added a new class: Login Class Fast Site</td>
															<td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
															<td class="view-message  text-right">9:27 AM</td>
														</tr>
														<tr class="unread">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="ti-star"></i></td>
															<td class="view-message dont-show">Google Webmaster </td>
															<td class="view-message">Improve the search presence of WebSite</td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">March 15</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="ti-star"></i></td>
															<td class="view-message dont-show">JW Player</td>
															<td class="view-message">Last Chance: Upgrade to Pro for </td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">March 15</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="messages">
											<div class="table-responsive">
												<table class="table table-inbox table-hover table-responsive">
													<tbody>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="ti-star"></i></td>
															<td class="view-message dont-show">JW Player</td>
															<td class="view-message">Last Chance: Upgrade to Pro for </td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">March 15</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="ti-star inbox-started"></i></td>
															<td class="view-message dont-show">Freelancer.com <span class="badge badge-danger pull-right m-t-6">urgent</span></td>
															<td class="view-message">Stop wasting your visitors </td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">May 23</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="ti-star"></i></td>
															<td class="view-message dont-show">Skype <span class="badge badge-info pull-right m-t-6">family</span></td>
															<td class="view-message view-message">Password successfully changed</td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">March 24</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="ti-star inbox-started"></i></td>
															<td class="dont-show">Zoosk </td>
															<td class="view-message">7 new singles we think you'll like</td>
															<td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
															<td class="view-message text-right">May 14</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="settings">
											<div class="table-responsive">
												<table class="table table-inbox table-hover table-responsive">
													<tbody>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="ti-star inbox-started"></i></td>
															<td class="view-message dont-show">LinkedIn Pulse</td>
															<td class="view-message">The One Sign Your Co-Worker Will Stab</td>
															<td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
															<td class="view-message text-right">Feb 19</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="ti-star"></i></td>
															<td class="view-message dont-show">Drupal Community<span class="badge badge-success pull-right m-t-6">megazine</span></td>
															<td class="view-message view-message">Welcome to the Drupal Community</td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">March 04</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="ti-star"></i></td>
															<td class="view-message dont-show">Skype <span class="badge badge-info pull-right m-t-6">family</span></td>
															<td class="view-message view-message">Password successfully changed</td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">March 24</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="ti-star inbox-started"></i></td>
															<td class="dont-show">Zoosk </td>
															<td class="view-message">7 new singles we think you'll like</td>
															<td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
															<td class="view-message text-right">May 14</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

@endsection

@section('script-contact')
<script src="js/lib/autosizetextarea/autosize.min.js"></script>
<script>
	autosize(document.querySelectorAll('textarea'));
</script>
@endsection