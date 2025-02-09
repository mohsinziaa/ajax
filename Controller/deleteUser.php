<?php
include "connection.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM users WHERE id = ?";
    $params = array($id);
    $stmt = sqlsrv_query($connection, $query, $params);

    if ($stmt) {
        echo "success";
    } else {
        echo "error";
    }
}
?>