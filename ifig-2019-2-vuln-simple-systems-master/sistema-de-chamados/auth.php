<?php

include 'conf/init.php';

foreach($_POST as $idx => $val) {
    $$idx = $val;
}

login($username, $pw);
if (is_logged()) {
    redirect('index.php');
}
$vars = '';
foreach($_POST as $idx => $val) {
    if (in_array($idx, ['pw'])) continue;
    $vars .= "&$idx=$val";
}
redirect('login.php?ml=E-mail ou senha incorreto' . $vars);

?>