<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    
    <form action="test9.php" method="post">
            Value A:
        <input type="text" name="ValueA" id="">
        <br>
            Value B:
        <input type="text" name="ValueB" id="">
        <br>
        <input type="submit" value="Calculate">
    </form>
    
</body>
</html>
<?php 
if ($_POST) {
    
    $ValueA=$_POST["ValueA"];
    $ValueB=$_POST["ValueB"];
    //OPERADORES RELACIONALES
   if ($ValueA > $ValueB) {
    echo "The Value A is ELDERLY";
   } else {
    echo "The Value A is MINOR";
   
   }
}
?>