<?php

require 'vendor/autoload.php';
require 'lib/SendGrid.php';

$sendgrid_apikey = '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';

$sendgrid = new SendGrid($sendgrid_apikey);
$email1 = new SendGrid\Email();
$email1
    ->addTo('saikat.ruet12@gmail.com')
    ->setFrom('saikat@cse.ruet.com')
    ->setSubject('Demo Email')
    ->setText('Hel World')
;

$result = $sendgrid->send($email1);

if($result->code == 200)
{
    echo "Mail gese!!!" . PHP_EOL;
}
else
{
    echo "Mara khao!!!" . PHP_EOL;
}


?>
