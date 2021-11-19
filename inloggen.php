<?php
$page_title="Inloggen";
include('system/header.php');

//multiLine string maken
$inlogstr= <<<_END
   <form action="inloggen.php" method="post">
      Inlognaam:<br>
      <input type="text" name="inlogNaam">
      <br>
      Wachtwoord<br>
      <input type="password" name="wachtwoord">
      <br><br>
      <input type="hidden" name="sw" value="1">
      <input type="submit" class="btn btn-default" value="Submit" name="Submit">
   </form>
_END;

if (isset($_POST['Submit'])){
   $inlogNaam=$_POST['inlogNaam'];
   $wachtwoord=$_POST['wachtwoord'];
   echo "<h1>je inlognaam is: $inlogNaam";
 }else{
   echo $inlogstr;
 }
  

 include('system/footer.php');
 ?>