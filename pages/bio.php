<?php  $user= getUserData(); ?>

<h1>Ma bio</h1>

<?php


var_dump($user);

?>
<h1><?=$user["first_name"]?> <?=$user["name"]?></h1>
<h2><?=$user["occupation"]?></h2>





<?php foreach ($user["experiences"] as $key): ?> 

<li><i><?= $key["year"]?> <?=$key["company"]?></i></li>

<?php endforeach ?>














