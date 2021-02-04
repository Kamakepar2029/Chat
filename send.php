<?php
if (isset($_GET['username'])){
$file = file_get_contents('chat.json');
if ($file){
  $mass = $file;
}else{
  $mass = '[]';
}
$elem=[
  "username" => $_GET["username"],
  "message" => $_GET["msg"]
  ];
$elem = json_encode($elem);
$mass = str_replace(']',','.$elem.']',$mass);
$fo = fopen('chat.json','w');
fwrite($fo,($mass));
echo json_encode($mass);
fclose($fo);
}
?>