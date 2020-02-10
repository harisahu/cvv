
<?php

if(isset($_POST['name']))
{
  $data=$_POST['name'];

  $fp = fopen('database.txt','a');
  fwrite($fp, $data);
  fclose($fp);
}
?>
