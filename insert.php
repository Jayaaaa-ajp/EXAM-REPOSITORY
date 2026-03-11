<?php

include "config.php";

$patient_id = $_POST['patient_id'];
$doctor = $_POST['doctor_name'];
$date = $_POST['consultation_date'];
$diagnosis = $_POST['diagnosis'];
$treatment = $_POST['treatment'];

$sql = "INSERT INTO consultations 
(patient_id, doctor_name, consultation_date, diagnosis, treatment)

VALUES 
('$patient_id','$doctor','$date','$diagnosis','$treatment')";

$conn->query($sql);

header("Location: landing.php");

?>
