<?php

include "config.php";
$id = $_GET['id'];
if(isset($_POST['update'])){

$doctor = $_POST['doctor_name'];
$date = $_POST['consultation_date'];
$diagnosis = $_POST['diagnosis'];
$treatment = $_POST['treatment'];
$sql = "UPDATE consultations SET

doctor_name='$doctor',
consultation_date='$date',
diagnosis='$diagnosis',
treatment='$treatment'

WHERE consultation_id='$id'";

$conn->query($sql);
header("Location: landing.php");

}

$data = $conn->query("SELECT * FROM consultations WHERE consultation_id='$id'");
$row = $data->fetch_assoc();

?>
<form method="POST">Doctor Name
<input type="text" name="doctor_name" value="<?php echo $row['doctor_name']; ?>">Date
<input type="date" name="consultation_date" value="<?php echo $row['consultation_date']; ?>">Diagnosis
<input type="text" name="diagnosis" value="<?php echo $row['diagnosis']; ?>">Treatment
<input type="text" name="treatment" value="<?php echo $row['treatment']; ?>">
<button name="update">Update</button>

</form>
