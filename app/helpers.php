<?php
if (!function_exists('pr')) {
	function pr($dataArr,$flag=0)
	{
		echo "<pre>";
		print_r($dataArr);
		if($flag == 1)
			exit;

	}
}

/* Create directory for upload */
if (!function_exists('checkDir')) {
	function checkDir($path)
	{
		if(!is_dir($path)) {
			mkdir($path);
			chmod($path, 0775);
		}
	}
}

/* Message config  */
if (!function_exists('messageBag')) 
{
	function messageBag($message, $msgConfig = "success",$title='Saved!')
	{
		if($msgConfig == "delete") 
		{
			return [];
		} else {
			return ["type" => $msgConfig, "title" => $title, "text" => $message];
		}
	}
}

if (!function_exists('getListOfTimezones')) {
	function getListOfTimezones()
	{
		return DateTimeZone::listIdentifiers();
	}
}

if (!function_exists('filterEditorContent')) {
	function filterEditorContent($html)
	{
		// Extract only the content within the body tag
		if (preg_match('/<body[^>]*>(.*?)<\/body>/is', $html, $matches)) {
			$html = $matches[1];
		}
		$html = trim($html,"\n\t");
		$html = trim($html);
		return $html;
	}
}