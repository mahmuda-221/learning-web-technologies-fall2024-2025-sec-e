<?php

$id = $_GET['veh_id'];
$salary = $_POST['salary'];
$equipment = $_POST['equipment'];
$oil = $_POST['oil'];
$tcost = $_POST['tcost'];

$conn = mysqli_connect('localhost', 'root', '', 'vehicle management system');
$sql = "INSERT INTO bill VALUES('','$id','$salary','$equipment','$oil','$tcost')";
if (mysqli_query($conn, $sql)) {

   $msg = "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";

   header("Location: indexbill.php");
} else {
   echo "Not inserted";
}
?>