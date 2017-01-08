
<?php 
$data = [ 

"name"=> $_POST["name"],
"message"=> $_POST["message"],

];

$data= json_decode($data);

file_put_contents(__DIR__ . '/../data/last_message.json', $data);

