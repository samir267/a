
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   prix HT: <input type="number" name="ht" value="<?php echo $_POST['ht']?>">
   prix tva <input type="number" name="tva" value="<?php echo $_POST['tva']?>">

  

    <input type="submit" value="envoyer">


</form>


<?php
if (isset($_POST['ht'])) {
    if (isset($_POST['tva'])) {
        $prix = ($_POST['ht'] * $_POST['tva'])/100;
        echo " ttc :<input type='number' value='$prix'>";
        $tva=$_POST['tva'];
        echo "tva :<input type='number' value='$tva'>";

    }
}
?>
