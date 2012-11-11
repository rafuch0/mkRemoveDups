<?php

$data = file_get_contents("tmp.csv");

$data = explode("\n", $data);
array_pop($data);

$comparer = array();

foreach($data as $value)
{
	$entry = explode(",", $value);

	if(!isset($comparer[$entry[0]]))
	{
		$comparer[$entry[0]] = array();
		$comparer[$entry[0]][] = $entry[1];
	}
	else
	{
		$comparer[$entry[0]][] = $entry[1];
	}
}

foreach($comparer as $key => $value)
{
	if(sizeof($value) > 1)
	{
		echo "\n".'#Duplicates of MD5 '.$key."\n";

		foreach($value as $entry)
		{
			echo '#rm "'.$entry."\"\n";
		}
	}
}
