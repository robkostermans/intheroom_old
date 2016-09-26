<?php
//
//  SIMPLE PHP script for some back-end functions
//
?>

<?php

$json = file_get_contents("data/data-users.json");
$data =  json_decode($json);
$users = $data->users;
?>