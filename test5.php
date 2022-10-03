 <?php 
 /** String y Concatenacion */
if ($_POST) {
    $txtName=$_POST['txtName'];
    $txtLastName=$_POST['txtLastName'];
    echo 'Hello '.$txtName."".$txtLastName; // Aqui se demuestra que es una concatenacion o String 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="test5.php" method="post">
    Name:
    <input type="text" name="txtName" id="">
    <br>
    Last Name:
    <input type="text" name="txtLastName" id="">
    <br>
    <input type="submit" value="Send">


</form>
</body>
</html>