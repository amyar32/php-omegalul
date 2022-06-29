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

   // Array
   // =====
   $hari = array("Senin", "Selasa", "Rabu");
   $months = ["Januari", "Februari", "Maret"];
   $mix = [1, "Halo"];

   // menambah data ke array
   $hari[] = "Kamis";

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
   <?php for($i = 0; $i < count($hari); $i++) { ?>
      <?php echo "$i. $hari[$i] <br>" ?>
   <?php } ?>

   <?php forEach($months as $month) { ?>
      <?php echo "$month <br>" ?>
   <?php } ?>
</body>
</html>