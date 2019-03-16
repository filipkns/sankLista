<!DOCTYPE html>
<html>
<?php

//include 'function.php';
include 'connectMySQL.php';
include 'sanklista.php';

?>
<body>

<form action="insertintolista.php" method="get" >
    Dodati nova pica
    <input type="submit" value="idi"><br><br>
</form>
<form action="changelista.php" method="get" >
    Dodati novo stanje
    <input type="submit" value="idi"><br><br>
</form>
<form action="delete.php" method="get">
    Obrisati sa stanja
    <input type="submit" value="idi"><br><br>
</form>



</body>
</html>