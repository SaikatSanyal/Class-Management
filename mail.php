<?php
// require '/home/minhaz/mailgun-php/vendor/autoload.php';

require 'C:/xampp/htdocs/registeration/mailgun-php/vendor/autoload.php';

use Mailgun\Mailgun;

$mgClient = new Mailgun('key-ccd8dccadc6e28408965e8340d122034');
$domain = "saikat.mailgun.org";

$result = $mgClient->sendMessage("$domain",
  array('from'    => 'Excited User <sandboxa6d239bf426d4ed092ecb0acbed3881a.mailgun.org>',
        'to'      => 'Minhaz <mdminhazulhaque@gmail.com>',
        'subject' => 'Hello',
        'text'    => 'Testing some Mailgun awesomeness!'));

if($result->http_response_code == 200)
    echo "Mail sent";
else
    echo "Mara khau";

?>
