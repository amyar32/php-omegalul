<?php
   // Built-in
   // ========
   // Date & Time
   // echo date("l");
   // echo date("l, d-M-y", time());
   // echo date("l", mkttime(0,0,0,0,0,0));
   // echo date("l", strtotime("28 jun 2022"));

   // String
   // strlen();
   // strcomp();
   // explode();
   // htmlspecialchars();

   // Utility
   // var_dump()
   // isset()
   // empty()
   // die()
   // sleep()

   // User Define
   // ===========
   function sayHello($word = "Datang", $str = "Admin") {
      return "Selamat $word, $str!";
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?=
      sayHello();
   ?>
</body>
</html>