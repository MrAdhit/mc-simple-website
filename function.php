<?php 
require 'config.php';
$status = json_decode(file_get_contents("https://api.mcsrvstat.us/2/$ip"));

$online = $status->online;

$player = $status->players->online;
$playerm = $status->players->max;
$motd = $status->motd->html;
 ?>