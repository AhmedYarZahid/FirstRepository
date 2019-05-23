<?php
$student_name=$_POST['student_name'];
$student_phone_no=$_POST['student_phone_no'];
$course_name=$_POST['course_name'];
$course_marks=$_POST['course_marks'];
$con=mysqli_connect('localhost','root','oneclout','STUDENT_RESULT');

$query="INSERT INTO STUDENT_INFO(student_name, student_phone_no) VALUES ('$student_name','$student_phone_no')";
$query="INSERT INTO STUDENT_COURSE(course_name, course_marks) VALUES ('$course_name','$course_marks')";

if(mysqli_connect_errno($con)){
	echo "failed to connect";
}
    else {echo "Data Inserted. Successfuly!<br>
    Name = $student_name<br>
    Phone no = $student_phone_no<br>
    Course = $course_name<br>
    Marks = $course_marks";
}
mysqli_query($con,"SELECT * FROM STUDENT_INFO");
mysqli_query($con,"INSERT INTO STUDENT_INFO(student_name, student_phone_no) VALUES('$student_name','$student_phone_no')");
mysqli_query($con,"SELECT * FROM STUDENT_COURSE");
mysqli_query($con,"INSERT INTO STUDENT_COURSE(course_name, course_marks) VALUES('$course_name','$course_marks')");


?>
