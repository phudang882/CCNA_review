<!DOCTYPE html>
<!-- asd -->
<html>
 <head>
  <title>EVE-NG Configuration Management</title>
 </head>
 <body>
  <form action="" method="post">
<?php 
exec("cd /opt/unetlab/labs/&&find . -name '*.unl'",$labs,$status); 
foreach ($labs as $lab){
 print ('<label><input type="radio" name="lab" value="'.$lab.'"/>'.substr($lab,1).'</label><br>'); 
}
 ?>

  <br>
  <input type="submit" value="Download">
  </form>

<?php
if (isset($_POST["lab"])) {
 $a = exec("python /opt/unetlab/scripts/config.pyc '".$_POST["lab"]."'",$out,$status);
 if ($a == 1){
  print("No one node inside lab!");
 }elseif ($a == 2){
  print("No exported config inside lab!");
 }else{	
  print('<script language="JavaScript">self.location="/Exports/'.$a.'";</script>');
 }
}
 ?>
 </body>
</html>
