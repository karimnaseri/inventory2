<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require('include/connection.php');
    $sql = $conn->query('DELETE FROM item WHERE id=' . $id);
    if ($sql) {
        header("Location:index.php");
    } else {
        header("Location:index.php?msg=<h6 style='color:red'>The item wasn't deleted!</h6>");
    }
}
