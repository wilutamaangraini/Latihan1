<?php

$DaftarNegaraASEANdanIbukota = [
    "Indonesia" => "D.K.I.Jakarta",
    "Singapura" => "Singapura",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"];
    // Untuk memasukkan value, kita harus membuat key yang merepresentasikan valuenya.
    // tanda "=>" dapat diartikan sebagai merujuk
    // "key" => "value"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
</head>
<body>
    <h3>Daftar Negara ASEAN dan Ibukota:</h3>

    <?php foreach ($DaftarNegaraASEANdanIbukota as $nrp => $negara) :?>
        <li><?php echo "$nrp : $negara" ?></li>
    <?php endforeach ?>
</body>
</html>


