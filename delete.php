<?php
unlink('fishData/'.$_GET['list']);
header('Location: /index.php');
?>