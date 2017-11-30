<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
</head>
<body>
  <?php
    // echo 사용자가 입력한 정보중에 password의 값
    $password = $_GET["password"];
    if ($password == "1111") {
      echo "주인님 환영합니다.";
    }
    else {
      echo "뉘신지?";
    }
   ?>
</body>
</html>