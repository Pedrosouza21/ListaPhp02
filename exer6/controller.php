   <?php
$V = (double)$_GET['p'];
$H=0;
$C;

for($H = 1; $H <= 5; $H++)
{
  $C=$H+$V;
  echo "".$H."+".$V."=".$C."";
  echo "<br>";
}
?>