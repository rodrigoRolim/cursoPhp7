<?php 
$json = '[{"nome":"jo\u00e3o","idade":20},{"nome":"rodrigo","idade":25}]';
$data=json_decode($json, true);

var_dump($data);
 ?>