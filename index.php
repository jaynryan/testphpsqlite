<?php



$ver = SQLite3::version();

echo $ver['versionString'] . "\n";

$db = new SQLite3('test.db');

$version = $db->querySingle('SELECT SQLITE_VERSION()');

echo $version . "\n";
