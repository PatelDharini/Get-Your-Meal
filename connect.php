<?php
$Student_name=$_POST['Student_name'];
$Academic_year=$_POST['Academic_year'];
$Student_ID=$_POST['Student_ID'];
$yes_no=$_POST['yes_no'];

// Connection
$conn = new mysqli('localhost','root','','meal')
// if($conn->connect_error)
// {
// 	die("Connection failed: ". $conn->connect_error);
// }
// else
// {
$stmt=$conn->prepare("insert into demo(Student Name,Academic year, Student ID,yes or no) values(?,?,?,?)");
$stmt->bind_param("siis",$Student_name,$Academic_year,$Student_ID,$yes_no);
$stmt->execute();
echo "Connected successfully";
$stmt->close()
$conn->close();
// }
?>




