<?php

$name = "http request is successful";
header('Content-Type: application/json');
//$response = ;
echo json_encode(array('message' => $name));
exit();
?>
