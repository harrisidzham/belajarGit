<?php
include 'config.php';
$id = $_GET['id'];
$conn->query("DELETE FROM tempahan WHERE id=$id");
header("Location: index.php");
?>