<?php
include('../Risepay.php');
$risepay = new Risepay ("JhonnDev","U0H464z4");

$risepay->NameOnCard =  "Jhonny";
$risepay->CardNum = "5149612222222229";
$risepay->ExpDate = "1214";
$risepay->Amount = "10";
$risepay->CVNum = "734";
$risepay->InvNum = "ABD41";
$risepay->Zip = "36124";
$risepay->Street = "Gran vio 25";
$risepay->Customer = "John Developer";
$risepay->TipAmt = 1;

$msg = $risepay->sale();


print_r ($msg);

?>
