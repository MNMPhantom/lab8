<?php
function loadClass($c)
{
	include ROOT."/classes/".$c.".class.php";
}

function requestIndex($index, $value='')
{
	$data = isset($_REQUEST[$index])? $_REQUEST[$index]:$value;
	return $data;
}