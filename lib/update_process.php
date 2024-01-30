<?php
rename('../fishData/'.$_GET['oldList'], '../fishData/'.$_GET['list']);
file_put_contents('../fishData/'.$_GET['list'], $_GET['content']);
header('Location: /index.php?list='.$_GET['list']);
?>