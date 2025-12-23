<?php
include 'connect.php';
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM sukien WHERE id = $id");
}
header("Location: danhsach_sukien.php");
?>