<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');

require_once(dirname(__FILE__, 2) . '/src/models/User.php');


$user = new User(['name'  => 'Lucas', 'email' => 'lucas@gg.com']);
print_r($user);
echo '<br>';
$user->email = 'lucaca@mail.com';
echo '<br>';
print_r($user->email);
