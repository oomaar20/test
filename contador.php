<?php
$count = 0;

if (isset($_COOKIE['count'])) {
    $count = intval($_COOKIE['count']);
}

$count++;


setcookie('count', $count);

echo $count;
?>
