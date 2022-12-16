<?php
require 'vendor/autoload.php';
echo "JOSSS";

/* ------------------------ contoh penggunaan pertama ----------------------- */

use ay4t\WhatsAppHelper\WhatsAppSG;

$wa     = new WhatsAppSG();

for ($g = 12; $g < 20; $g++)
{
    $tot=$g*$g;
    $wa->setPort('6789')
        ->setSenderPhone('089510279475')
        ->setRecepient('085211534677')
        ->setMessage('OKE '.$g."+".$g." = ".$tot);
    
    var_dump($wa->SendText());

}

