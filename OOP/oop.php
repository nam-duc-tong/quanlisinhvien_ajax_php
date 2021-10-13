<?php
require_once('hinhhoc.php');
require_once('hcn.php');
require_once('tamgiac.php');
$hcn = new hcn();
$hcn->nhap();
$hcn->tinhchuvi();
echo "<br>";
$hcn->dientich();
echo "<br>";
$hinhtamgiac= new tamgiac();
$hinhtamgiac->nhap();
$hinhtamgiac->tinhchuvi();

?>