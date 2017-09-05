<?php

function strip_zeros_from_date($marked_string="")
{
	$no_zeros = str_replace('*0', '', $marked_string);
	$clean_string = str_replace('*', '', $no_zeros);
	return $clean_string;
}

function redirect_to($location = NULL)
{
	if($location != NULL)
	{
		header("Location: {$location}");
		exit;
	}
}

function output_message($message="")
{
	if (!empty($message))
	{
		return "<p class=\"message\">{$message}</p>";
	}
	else
	{
		return "";
	}
}

function __autoload($class_name) {
	$class_name = strtolower($class_name);
	$path = LIB_PATH.DS.$class_name."php";
	if (file_exists($path)) {
		require_once($path);
	} else {
		die("The file {$class_name}.php could not be found.");
	}
}

function include_layout_template($template="") {
	include(SITE_ROOT.DS.'public'.DS.'layouts'.DS.$template);
}
?>
