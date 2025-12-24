<?php
include 'connect.php';

$id = $_GET['id'];
$conn->query("DELETE FROM tintuc WHERE id = $id");

header("Location: danhsach_tintuc.php");
