<?php
function print_list()
{
   $list = scandir('./fishData');
   $i = 0;
   while ($i < count($list)) {
      if ($list[$i] != '.' && $list[$i] != '..') {
         $ll = htmlspecialchars($list[$i]);
         echo "<li><a href='index.php?list=".$ll."'>$ll</a></li>";
      }
      $i++;
   }
}
function print_content()
{
   if (!empty($_GET['list'])) {
      $tit = htmlspecialchars($_GET['list']);
      echo "<h3>".$tit."</h3>";
      $dir = basename('./fishData');
      $content = htmlspecialchars(file_get_contents( $dir.'/'. $_GET['list']));
      echo "<p>$content</p>";
   } else {
      echo '시마노 릴 정보 사이트에 오신 여러분 환영합니다.';
   }
}
?>