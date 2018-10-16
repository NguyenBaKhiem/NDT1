<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Confession;
use Validator;
use App\Helpers\ImageRepository;
class ConfessionController extends Controller
{
	public function postconfession(Request $request)
	{	
		if ($request->hasFile('attachment')) {
			$files = $request->file('attachment');
			foreach ($files as $file ) {
				$capacity = $file->getClientSize($file);
				$namefile = $file->getClientOriginalName($file);
				$namefile = $file->getClientOriginalName($file);
				$file->move('uploads/images', time()."_".$capacity."_".$namefile);
			}
			return response()->json([
				'message' => 'no an error until upload finish'
			], 200);

		}
		return response()->json([
			'message' => 'success'
		], 200);

	}
}
