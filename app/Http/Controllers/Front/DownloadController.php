<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DownloadController extends Controller
{
	//
	public function download($filename)
	{
		// Check if file exists in app/storage/file folder
		$file_path = storage_path() .'/file/'. $filename;
		if (file_exists($file_path))
		{
			// Send Download
			return Response::download($file_path, $filename, [
				'Content-Length: '. filesize($file_path)
			]);
		}
		else
		{
			// Error
			exit('Requested file does not exist on our server!');
		}
	}
}
