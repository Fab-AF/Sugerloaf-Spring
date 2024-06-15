<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class EditorController extends Controller
{
     public function index(Request $request)
	 {
		$pageid = $request->get('page');
		$type = $request->get('type') ?? "page";
		
		$getCategory = "";
		$getTag = "";
		$content = "";
		$extraParam = [];

		$page = Cms::where("id", $pageid)->first();
		$content = $page->description;
	
		File::put('editor.html', $content);		
		return view('admin.editor', ["page" => $page, 'type' => $type, 'extraParam' => $extraParam]);
	 }

	 public function storePage(Request $request, $page)
	 {
		 $extraParam = $request->get("extraParam");
		 $page = Cms::where("id", $page)->first();			 
		 $page->title = $extraParam['title'];
		 $page->status = $extraParam['status'];
		 $page->description = $request->html;
		 $page->seo_title = $extraParam['seo_title'] ?? "";
		 $page->seo_keyword = $extraParam['seo_keyword'] ?? "";
		 $page->seo_description = $extraParam['seo_description'] ?? "";
		 if($page->save()) {
			return "Your page has been save sucesssfully.";
		 }
	 }

	 public function scanImages(Request $request)
	 {
		if (!empty($request->get('mediaPath'))) {
			define('UPLOAD_PATH', $request->get('mediaPath'));
		} else {
			define('UPLOAD_PATH', 'media');
		}

		$scandir = UPLOAD_PATH;
		
		$scan = function ($dir) use ($scandir, &$scan) 
		{
			$files = [];

			### Is there actually such a folder/file?
			if (file_exists($dir)) 
			{
				foreach (scandir($dir) as $f) 
				{
					if (! $f || $f[0] == '.') 
					{
						continue; // Ignore hidden files
					}

					if (is_dir($dir . '/' . $f)) 
					{
						// The path is a folder

						$files[] = [
							'name'  => $f,
							'type'  => 'folder',
							'path'  => str_replace($scandir, '', $dir) . '/' . $f,
							'items' => $scan($dir . '/' . $f), // Recursively get the contents of the folder
						];
					}
					else 
					{
						// It is a file

						$files[] = [
							'name' => $f,
							'type' => 'file',
							'path' => str_replace($scandir, '', $dir) . '/' . $f,
							'size' => filesize($dir . '/' . $f), // Gets the size of this file
						];
					}
				}
			}
			return $files;
		};

		$response = $scan($scandir);

		// Output the directory listing as JSON		
		return response()->json([
			'name'  => '',
			'type'  => 'folder',
			'path'  => '',
			'items' => $response,
		])->header('Content-Type', 'application/json');		
	 }

	 public function uploadImage(Request $request)
	 {
		define('UPLOAD_FOLDER', '');
		if (isset($_POST['mediaPath'])) {
			define('UPLOAD_PATH', $this->sanitizeFileName(str_replace("/","",$_POST['mediaPath'])) .'/');
		} else {
			define('UPLOAD_PATH', '');
		}

		$destination = UPLOAD_PATH.$_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'], $destination);
		if (isset($_POST['onlyFilename'])) {
			return $_FILES['file']['name'];
		} else {
			return UPLOAD_PATH.$_FILES['file']['name'];
		}
	 }

	 public function sanitizeFileName($file)
	 {
		### sanitize, remove double dot .. and remove get parameters if any
		$file = preg_replace('@\?.*$@' , '', preg_replace('@\.{2,}@' , '', preg_replace('@[^\/\\a-zA-Z0-9\-\._]@', '', $file)));
		return $file;
	}
}
