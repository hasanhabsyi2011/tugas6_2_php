<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php
    $hargaJambu = 15000;
    $hargaDus = 2000;
    $jmlDus = 6;
    $beratPerDus = 5;

    //Harga Jambu seluruhnya:
    $jmlHargaJambu = $jmlDus * $beratPerDus * $hargaJambu;

    //Harga dus seluruhnya:
    $jmlHargaDus = $jmlDus * $hargaDus;

    //Hasil penjualan jambu dan dus:
    $totalJambuDus = $jmlHargaJambu + $jmlHargaDus;

     ?>

     ==========================================
     <br>
     Harga Jambu = Rp <?php echo $hargaJambu ?> / Kg
     <br>
     Harga Kardus = Rp <?php echo $hargaDus ?>  / pcs
     <br>
     Total Penjualan (Dus dan Jambu) = Rp <?php echo $totalJambuDus ?>
     <br>
     ==========================================

  </body>
</html>
