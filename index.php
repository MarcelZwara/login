<?php
require_once('class/User.class.php');

$user = new User('jkowalski', 'tajneHasło');
if($user->login()) {
    echo "Zalogowano!";
} else {
    echo "Zły login lub hasło";
}

?>