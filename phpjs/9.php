<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
</head>
<body>
  <h1>JavaScript</h1>
  <ol>
  <script>
    i = 0;
    while(i < 10){
      document.write("<li>hello world</li>");
      i++; // i = i + 1; <-- 이것도 가능
    }
  </script>
  </ol>
 
  <h2>php</h2>
  <ol>
  <?php
    $i = 0;
    while($i < 10){
      echo "<li>hello world</li>";
      $i++;  //$i = $i + 1; <-- 이것도 가능
    }
  ?>
  </ol>
</body>
</html>