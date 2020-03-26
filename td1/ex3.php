<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>

<form method="POST">
    <label for="size">size : </label>
    <input type="number" value="15" name="size" id="size">
    <input type="submit" value="Valider">
    <label for="color">color : </label>
    <input type="letter" value="red" name="color" id="color">
    <label for="message">message : </label>
    <input type="letter" value="test" name="message" id="message">
</form>

<?php
echo '<div style="font-size: '.$_POST["size"].'px;color:'.$_POST["color"].'">'.$_POST["message"].'</div>';
?>

</body>
</html>