<?php
include "connection.php";

if (isset($_POST['id']) && isset($_POST['name'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];

    $query = "UPDATE users SET name = ? WHERE id = ?";
    $params = array($name, $id);
    $stmt = sqlsrv_query($connection, $query, $params);

    if ($stmt) {
        echo "success";
    } else {
        echo "error";
    }
}
?>