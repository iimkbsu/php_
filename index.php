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


   <button onclick="onDisplay()">새 글 입력</button>
   <button onclick="offDisplay()" id="closeBtn" style="display:none;">닫기</button>
   <div style="margin: 0 auto; width:160px; display:none;" class="col-md-5" id="noneDiv">
      <form action="create.php" method="get" style="width:150px">
         <fieldset>
            <legend>새글 입력</legend>
            <p><input type="text" placeholder="리스트 이름 입력" name="list" required></p>
            <p><textarea placeholder="내용 입력" rows="10px" cols="30px" name="content" required></textarea></p>
            <input type="submit"> <input type="reset"><br><br>
         </fieldset>
      </form>
      <br>
   </div>

   <script language="javascript">
      function onDisplay() {
         $('#noneDiv').show();
         $('#closeBtn').show();
      }

      function offDisplay() {
         $('#noneDiv').hide();
         $('#closeBtn').hide();
      }
   </script>
</body>

</html>

<!-- 

list 항목은 index3.php 경로의 fishData폴더 하위 문서의 이름으로 표기

List 항목을 누르면 문서의 내용(컨탠츠)를 표기

새글 입력은 List 이름과 문서 내용(컨탠츠)을 작성하여 submit

현재 내용 지우기는 현재 선택되어 있는 name값(리스트명)의 문서를 지우므로써 리스트항목과 컨탠츠를 지우도록 함

GET 메소드를 POST 메소드로 바꿔서 URL 파라미터 노출을 막는 것이 좋음


--------------------------------------------------------------------------------------------------
XSS(Cross site scripting) 해킹 보안 (2가지 기본 방법)

1. <script></script>를 php의 echo에서 사용할 수 없게하기 위해 htmlspecialchars('');를 사용하여  html특문활성 제거
&(앰퍼샌드)
 &amp;

""(겹따옴표)
 &quot;

''(홑따옴표) 
 &#039;

<(미만) 
 &lt;

>(이상)
 &gt;

2. php의 strip_tags('문자열', ['제거에서 제외할태그']) 사용하여 문자열에서 HTML/php 태그 제거하기


-------------------------------------------------------------------------
url 경로 공격 보안
php의 basename('경로'); = 경로를 숨겨서 선택된 파일명만 나타냄

------------------------------------------------------------------------







-->