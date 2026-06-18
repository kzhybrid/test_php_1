<?php
echo "<h1>site2.local works</h1>";
echo "<p>PHP version: " . PHP_VERSION . "</p>";
echo "<p>Site: site2</p>";
$s = 1;
file_put_contents('storage/test.txt', $s);
echo 1;
echo phpinfo();

