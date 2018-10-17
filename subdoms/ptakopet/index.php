<?php
$url = $_SERVER['SERVER_NAME'];
header("Location: //" . preg_replace("/ptakopet\./", "", $url) . "?p=ptakopet");
?>
