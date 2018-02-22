<?php

return [

'driver' => 'smtp',
'host' => env('MAIL_HOST', 'smtp.gmail.com'),
'port' => env('MAIL_PORT', '587'),
'from' => ['address' => 'mituramray09@gmail.com', 'name' => 'Mitu'],
'encryption' => env('MAIL_ENCRYPTION','tls'),
'username' => env('MAIL_USERNAME', 'mituramray09@gmail.com'),
'password' => env('MAIL_PASSWORD', 'mitu13045409'),
'sendmail' => '/usr/sbin/sendmail -bs',

'pretend' => false,

];