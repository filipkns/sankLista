<?php

require 'connectMySQL.php';
include 'sanklista.php';

$values = "SELECT ime_pica FROM lista ";
$values1 = mysqli_query($connection, $values);


while($row = mysqli_fetch_assoc($values1)){
    echo "ime pica : " . $row['ime_pica'];
};
  
?>
<select id="<?php $row['ime_pica'] ?>" size="1">

    <option value="<?php  echo "ime pica : " . $row['ime_pica']     ?>"  <?php "ime pica : " . $row['ime_pica'] ?>></option>//<

</select>
        

<form action="delete.php" method="post">
    <!--Ime pica : <input type="text" name="imepica" ><br>-->
    <input type="submit" required><br>
</form>

<?php

if(!empty($imepica)){
    // "DELETE FROM lista WHERE ime_pica=".$imepica;
    $sql = "DELETE FROM lista WHERE ime_pica='$imepica'";
    if (mysqli_query($connection, $sql)) {
            
             echo "New record deleted successfully";
            } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    
}
}
//else{
   // echo 'Ukucajte ime';//sa ovim imam problema
    //tu bih html promenio, da postoji samo dropdown sa postojecim imenima pica
    //to sam hteo da uradim. Da mogu samo postojeca da se brisu
    //mozhesh to sa javascript/jquery
    //sa njima nisam radio. Nisam znao da moze.
    //mzohe i bez toga ustvari, samo hmm...
    // hocu da napravim upit prvo da li postoji, pa tek onda da ga obise, i treba na svakog strani da 
    //napravim da se
//}


