<?php
	/*
	$songs = file_get_contents('https://private-f69ff-musicministry.apiary-mock.com/songs');

	$songsData = json_decode($songs); //convert json to a php object
	var_dump($songsData);
	print_r($songsData);
	echo $songsData[0]->song_name;
	*/

	$json = file_get_contents('data.json');
	$jsonData = json_decode($json,true);
	$result = $jsonData['result'];
	$keyAgente = $result[0]['respuesta']['datos']['keyagente'];
	var_dump($jsonData);
	echo('El keyagente es ' . $keyAgente);
?>