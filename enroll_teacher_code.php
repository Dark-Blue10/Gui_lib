<?php
    session_start();
    include 'connection_DB.php';
    if (isset($_POST['done'])) {
        # code...
        $id = $_POST['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $shift = $_POST['shift'];
        $department = $_POST['department'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $q = "INSERT INTO `teacher`(`id`, `first_name`, `last_name`, `shift`, `department`, `email`, `phone`) VALUES ('$id',' $first_name','$last_name','$shift','$department','$email','$phone');";
        $query = mysqli_query($con,$q);
        header("location:enroll_teacher.php?Data_Inserted");
        $_SESSION['response']="Data Saved Successfully !";
        $_SESSION['res_type']="success";
    }



?>