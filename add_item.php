<?php
if (isset($_POST['name'])) {
    require('include/connection.php');
    if ($_POST['type'] == "edit") {
        $edit = $conn->query("UPDATE item SET name='" . $_POST['name'] . "',price='" . $_POST['price'] . "',quantity='" . $_POST['quantity'] . "',description='" . $_POST['desc'] . "' WHERE id=" . $_POST['id']);
        if ($edit) {
            header("Location:index.php");
        }
    }
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];


    if ($_POST['type'] == "add") {
        $affected = $conn->query("INSERT INTO item values (null,'" . $name . "'," . $quantity . "," . $price . ",'" . $desc . "',now())");

        mysqli_set_charset($conn, "utf8");

        if ($affected) {
            header("Location:index.php?msg=one record inserted");
        } else {
            echo "error occured";
        }
    }
}
