<!DOCTYPE html>
<html lang="ko">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>글생성, 글 삭제 기능 구현</title>

   <script src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>

<body>
   <?php
   require_once('./lib/printfunc.php');
   ?>
   <h1><a href="index.php">시마노 릴</a></h1>
   <ol>
      <?php
      print_list();
      ?>
   </ol>
   <hr>
   <div>
      <?php
      print_content();
      ?>
   </div>
   <br>
   <hr>

   <div>
      <?php
      require('./lib/update_delete.php');
      ?>

   </div>
   <div style="margin: 0 auto; width:160px">
      <form action="./lib/update_process.php?list=<?= $_GET['list'] ?>" method="get" style="width:150px">
         <fieldset>
            <legend>현재 글 수정하기</legend>
            <p><input type="hidden" name="oldList" value="<?= $_GET['list'] ?>">
            <p>
            <p><input type="text" name="list" placeholder="<?= $_GET['list'] ?>" required></p>
            <p><textarea placeholder="<?= file_get_contents('fishData/' . $_GET['list']) ?>" value="" rows="10px"
                  cols="30px" name="content" required></textarea></p>
            <input type="submit"> <input type="reset"><br><br>
         </fieldset>
      </form>
      <br>
   </div>
</body>

</html>

<!-- 

list 항목은 index3.php 경로의 fishData폴더 하위 문서의 이름으로 표기

List 항목을 누르면 문서의 내용(컨탠츠)를 표기

새글 입력은 List 이름과 문서 내용(컨탠츠)을 작성하여 submit

현재 내용 지우기는 현재 선택되어 있는 name값(리스트명)의 문서를 지우므로써 리스트항목과 컨탠츠를 지우도록 함

-->