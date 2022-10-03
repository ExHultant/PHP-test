<?php
//Recibir informacion del formulario HTML (Metodo POST)
    if ($_POST) {
        $name=$_POST['txtName'];
        echo 'Hello '.$name;
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
    <form action="test2.php" method="post">
        Name:
        <input type="text" name="txtName" id="">
        <br>
        <input type="submit" value="Send">
    </form>
</body>
</html>