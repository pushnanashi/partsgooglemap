<?php

$res=$_POST['pd'];
$req = file_get_contents($res);
$req=json_decode($req, true);
$en=urlencode($req['response']['station']['0']['name']);

echo $req['response']['station']['0']['name'].",".$req['response']['station']['0']['x'].",".$req['response']['station']['0']['y'].",".$req['response']['station']['0']['prefecture'];

?>