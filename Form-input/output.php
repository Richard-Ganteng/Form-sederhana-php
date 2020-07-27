<?php

if(isset($_POST['input'])){

  $nama = htmlspecialchars($_POST['nama']);
  $asal = htmlspecialchars($_POST['asal']);

  echo $nama."<br>";
  echo $asal;


}


?>
