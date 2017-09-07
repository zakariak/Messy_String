<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      function cleanup() {
        $str = "  dEzE TeKSt wOrDt opgeSchoond ";
        $str =  strtolower($str);
        $str = ucwords($str);
        $str = trim($str, " ");
        echo $str;
      }
      cleanup();
     ?>
  </body>
</html>
