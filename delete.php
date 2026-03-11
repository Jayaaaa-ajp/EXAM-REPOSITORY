<?php
include "config.php";

$id = $_GET['id'];
$sql = "DELETE FROM consultations WHERE consultation_id='$id'";
$conn->query($sql);
header("Location: landing.php");

?>
