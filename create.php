<?php
file_put_contents('fishData/' . $_GET['list'], $_GET['content']);
header('location:/index.php');
?>