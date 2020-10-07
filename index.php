<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="SoA" placeholder="Nhap so A">
        <input type="number" name="SoB" placeholder="Nhap so B">
        <input type="number" name="SoC" placeholder="Nhap so C">
        <button type="submit">Tinh Toan</button>
    </form>
</body>
</html>
<?php
include ("QuadraticEquation.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $one = $_REQUEST["SoA"];
        $two = $_REQUEST["SoB"];
        $three = $_REQUEST["SoC"];
        $canbachai = new QuadraticEquation($one,$two,$three);

        if( $canbachai->getDiscriminant() > 0){
            echo "phuong trinh co hai nghiem phan biet la x1 = ".$canbachai->getRoot1() .": x2 =" .$canbachai->getRoot2();

        } else if ( $canbachai->getDiscriminant() == 0) {
            echo "phuong trinh co nghiem la x1 = x2 =" .$canbachai->getRoot1();
        } else {
            echo "phuong trinh vo nghiem";
        }

    }

