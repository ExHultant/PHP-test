<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    
    <form action="test8.php" method="post">
            Value A:
        <input type="text" name="ValueA" id="">
        <br>
            Value B:
        <input type="text" name="ValueB" id="">
        <br>
            Value C:
        <input type="text" name="ValueC" id="">
        <br>
            Value D:
        <input type="text" name="ValueD" id="">
        <br>
        <input type="submit" value="Calculate">
    </form>
    
</body>
</html>
<?php 
if ($_POST) {
    
    $ValueA=$_POST["ValueA"];
    $ValueB=$_POST["ValueB"];
    $ValueC=$_POST["ValueC"];
    $ValueD=$_POST["ValueD"];
    //OPERADORES ARIMETICOS
    $sums=$ValueA+$ValueB+$ValueC+$ValueD;
    $rest=$ValueA-$ValueB-$ValueC-$ValueD;
    $divide=$ValueA/$ValueB/$ValueC/$ValueD;
    $multiplication=$ValueA*$ValueB*$ValueC*$ValueD;

    echo "<br>".$sums;
    echo "<br>".$rest;
    echo "<br>".$divide;
    echo "<br>".$multiplication;

}
?>