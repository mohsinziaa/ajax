<?php
include "connection.php";

// Query to fetch users data
$query = "SELECT id, name FROM users";

$result = sqlsrv_query($connection, $query);

if ($result === false) {
    die(print_r(sqlsrv_errors(), true)); // Debugging error
}

$data = "";
while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    $data .= "<tr id='row-{$row['id']}'>
                <td>{$row['id']}</td>
                <td class='user-name'>{$row['name']}</td>
                <td class='text-center'>
                    <button class='btn btn-primary btn-sm edit-btn' data-id='{$row['id']}'>Edit</button>
                    <button class='btn btn-danger btn-sm delete-btn' data-id='{$row['id']}'>Delete</button>
                </td>
            </tr>";
}

// If no data found
if (empty($data)) {
    $data = "<tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
              </tr>";
}

echo $data;

?>