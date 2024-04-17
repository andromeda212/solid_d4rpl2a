<?php

include_once "social_media.php";
include_once "instagram.php";
include_once "whatsapp.php";

$postMediaManager = new PostMediaManager();
$instagram = new Instagram($postMediaManager);

$vidioGroupManager = new VidioGroupManager();
$whatsapp = new WhatsApp($vidioGroupManager);

$instagram->chat()



?>
