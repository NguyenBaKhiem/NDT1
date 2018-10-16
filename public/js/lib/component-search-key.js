/* Component search key */
var base_url = "/NDT/public";
var loading_result = $(".loading-result").hide();
$(document).ready(function() {
	var key_support;
	var old_key = null;
	function showModalSearch() {
		$("#supportModal").modal('show');
		$(".reset-modal-key").click();
		$(".modal-key-support").attr('value', key_support);
	}
	function showError() {
		$(".count-result").hide();
		$(".result-key").hide();
		loading_result.show();
	}
	function clickToSeach() {
		loading_result.hide();
		$.ajax({
			url: base_url+'/ajax/search-support',
			data: {key: key_support},
			statusCode: {
				500: function () {
					showError();
					$(".page-result").html('Internal Server Error, please try again.');
					console.clear();
				},
				508: function () {
					showError();
					(".page-result").html('Resource Limit is Reached, please try again.');
					console.clear();
				}
			}

		})
		.done(function(data) {
			function count_rs(countresult) {
				if(countresult === undefined) {
					return 'No key to search!!';
					$(".result-key").empty();
				} else {
					return 'Sum '+countresult+' results.';
				}
			}
			$(".count-result").html(count_rs(data.countresult)).show();
			$(".result-key").html(data.output).show();
		})
		.fail(function(data){
			showError();
			$(".page-result").html('Server timeout or unknow errors, please try again.');
			console.clear();
		});
		showModalSearch();
	}
	$("body").on('change', '.search-key-support',function() {
		key_support = $("input[name=search-key-support]").val();
		key_support = standar(key_support);
		$("body").delegate('#btn-search-support', 'click', function() {
			if(old_key === key_support) {
				showModalSearch();
			}
			else {
				clickToSeach();
				old_key =key_support;
			}
		});
	});	
	if($(".modal-key-support").change()) {
		var modal_key_support = $("input[name=modal-key-support]").val();
		$(".modal-key-support").val().replace(modal_key_support, key_support);
	}
});
$(document).on('click', '.paginate-result a', function(e) {
	loading_result.hide();
	e.preventDefault();
	key_supportss = $("input[name=search-key-support]").val();
	e.preventDefault();
	var page = $(this).attr('href').split('page=')[1];
	var currentURL = window.location.href;
	currentURL = currentURL + "?page=" + page;
	getPageResult(page);
});
$(".result-key")
.ajaxStart(function () {
	loading_result.show();
})
.ajaxStop(function () {
	loading_result.hide();
});
function getPageResult(page) {
	$.ajax({
		url: base_url +'/ajax/getresult?page=' + page,
		timeout: 4000,
		data: {key: key_supportss},
		statusCode: {
			500: function () {
				loading_result.show();
				$(".page-result").html('Internal Server Error, please try again.');
				console.clear();
			},
			508: function () {
				loading_result.show();
				(".page-result").html('Resource Limit is Reached, please try again.');
				console.clear();
			}
		}
	})
	.done(function(data) {
		$(".result-key").html(data);
	})
	.fail(function(data){
		loading_result.show();
		$(".page-result").html('Server timeout or unknow errors, please try again.');
		console.clear();
	});

}