
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   email: <input type="email" name="email">
    <input type="hidden" name="hiden" value="<?= $_SERVER['HTTP_USER_AGENT'] ?>">

    <input type="submit" value="envoyer">

</form>


<?php

if (isset($_POST['email']) ){
    echo $_POST['email'];
    echo ' <br> ';
    echo $_POST['hiden'];
    
}

 foreach ($_SERVER as $key => $value){
  echo "$key => $value <br>";}

?>