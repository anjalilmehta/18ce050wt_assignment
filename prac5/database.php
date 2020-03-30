<?php
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $pos = $_POST['position'];
   $bdate = $_POST['bdate'];
   $college = $_POST['collegename'];
   $course = $_POST['coursename'];
   $mail = $_POST['email'];
   $phno = $_POST['phno'];
   $gender = $_POST['gender'];

   
   $conn = new mysqli('localhost', 'root', '', 'WT_Assignment');
   if($conn -> connect_error){
      die('Connection Failed  : '.$conn -> connect_error);
   }

   else{
      $stmt = $conn -> prepare("insert into registration(FirstName, LastName, Gender, Email, College, Course, Position,BirthDay,Phone) values(?, ?, ?, ?, ?, ?, ?,?,?)");
      $stmt -> bind_param("ssssssdi", $fname, $lname, $gender, $mail, $college, $course, $pos, $bdate, $phone);
      $stmt -> execute();
      echo "Registration Successful!";
      $stmt -> close();
      $conn -> close();
   }
?>