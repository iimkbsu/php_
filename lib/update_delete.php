<?php 
      if (!empty($_GET['list'])) { ?>

         <a href="update.php?list=<?= $_GET['list'] ?>">수정</a>
         <a href="delete.php?list=<?= $_GET['list'] ?>">삭제</a>

         <form action="delete.php" method="get">
            <input type="hidden" name="list" value="<?= $_GET['list'] ?>">
            <input type="submit" value="글삭제">
         </form>
         <br><br>

      <?php } 

?>