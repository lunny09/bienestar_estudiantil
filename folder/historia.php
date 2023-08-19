<?php
require_once '../controller/historiacontroller.php';
$objdoc=new historiacontroller();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objdoc->mostrar();
    elseif ($op=="guardar")
        $objdoc->guardar();
   
?>
