<?php

$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$repo_req = $obj['repository'];

$repo_name = $repo_req['name'];
$repo_owner = $repo_req['owner']['name'];

echo $repo_owner;

?>
