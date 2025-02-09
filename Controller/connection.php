<?php

$serverName = "DOUBLEU"; //serverName\instanceName
$connectionInfo = array("Database" => "crud", "UID" => "", "PWD" => "");
$connection = sqlsrv_connect($serverName, $connectionInfo);

if (!$connection) {
    echo "Connection could not be established.<br />";
    die(print_r(sqlsrv_errors(), true));
} else {
    // echo "Connection established.<br />";
}

?>