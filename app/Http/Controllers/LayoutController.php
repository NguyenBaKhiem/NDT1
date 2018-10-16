<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Admin;
use App\Support;
class LayoutController extends Controller
{
	public function getListAdmin()
	{
		$admins = Admin::all();
		return view('frontend.about', ['admins' => $admins]);
	}
	public function getListSupport()
	{
		$supports = Support::paginate(3);
		return view('frontend.FAQs-and-support', ['supports' => $supports]);
	}
	public function ajaxListSupport()
	{
		$supports = Support::paginate(3);
		return view('vendor.ajax-pagination-support-list')->with('supports', $supports)->render();
	}
	public function getDetailFaq($id)
	{
		$support = Support::find($id);
		$random_supports = Support::select('id', 'title', 'content')->inRandomOrder()
		// ->when($id, function($id, $query)
		// {
		// 	while($query->id != $id) {
		// 		return $query$random_supports;
		// 	}
		// })
		->limit(4)->get();
		return view('frontend.detail-faq', ['support'=>$support], ['random_supports'=>$random_supports]);
	}
	public function ajaxResultFaq(Request $request)
	{
		if($request->ajax()) {
			if($request->has('key')) {
				$key = $request->key;
				$faqs = Support::where('title', 'like', '%'.$key.'%')
				->orWhere('content', 'like', '%'.$key.'%')
				->orWhere('answer', 'like', '%'.$key.'%');
				$countresult = count($faqs->get());
				$faqs = $faqs->paginate(6);
				$output ='';
				foreach($faqs as $count => $faq) {
					$output = $output.'<div class="result">'.'<a href="detail-faq.html/question_id='.$faq->id.'&title='.str_slug($faq->title).'">'.$faq->title.'</a></div>';
					if($count == (count($faqs)-1)) {
						$output = $output.'<div class="text-center paginate-result">'.$faqs->links().'</div>';
					}
				}
				if($request->key !="") {
					return response()->json(['output' => $output, 'countresult' => $countresult]);
				}
			}
			else {
				return response()->json([
					'error' => true,
					'message' => 'key empty ',
				], 200);
			}
		}	
	}
	public function ajaxPageResult(Request $request)
	{
		$key = $request->key;
		$output='';
		$faqs = Support::where('title', 'like', '%'.$key.'%')
		->orWhere('content', 'like', '%'.$key.'%')
		->orWhere('answer', 'like', '%'.$key.'%')->paginate(6);
		foreach($faqs as $count => $faq) {
			$output = $output.'<div class="result"> '.'<a href="detail-faq.html/question_id='.$faq->id.'&title='.str_slug($faq->title).'">'.$faq->title.'</a></div>';
			if($count == (count($faqs)-1)) {
				$output = $output.'<div class="text-center paginate-result">'.$faqs->links().'</div>';
			}
		}
		if($request->key !="") {
			return response($output);
		}
	}
}
