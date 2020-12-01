<?php
session_start();
include 'connection_DB.php';
    if (isset($_POST['save'])) {

        $student_id = $_POST['student_id'];
        $farstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $fathername = $_POST['fathername'];
        $shift = $_POST['shift'];
        $department = $_POST['department'];
        $phone = $_POST['phone'];
        # code...

        $q = "INSERT INTO `student`(`student_id`, `first_name`, `last_name`, `father_name`, `shift`, `department`, `phone`) VALUES ('$student_id','$farstname','$lastname','$fathername','$shift','$department','$phone')";
        $query = mysqli_query($con,$q);
        header("location:enroll_student.php?Student_Information_Form_Data_Inserted");
        
        $_SESSION['response']="Student Information Form Data Inserted Successfully !";
        $_SESSION['res_type']="success";
    }



?>