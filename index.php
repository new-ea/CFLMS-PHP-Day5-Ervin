<?php
spl_autoload_register("my_autoloader");
function my_autoloader($classname) {
  require "class/$classname.class.php";
}

$read = new CRUD;
$result = $read->read("media");
$outMeida = new HTML($result);
?>


