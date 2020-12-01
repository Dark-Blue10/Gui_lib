<?php
    session_start();
    include 'connection_DB.php';
    if (isset($_POST['employees'])) {
        # code...
        $employee_id = $_POST['employee_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $position = $_POST['position'];
        $email = $_POST['email'];
        $q = "INSERT INTO `emloyee`(`employee_id`, `first_name`, `last_name`, `position`,`email`) VALUES ('$employee_id',' $first_name','$last_name','$position','$email');";
        $query = mysqli_query($con,$q);
        header("location:enroll_employees.php?Data_Inserted");
        $_SESSION['response']=" Employees Data Saved Successfully !";
        $_SESSION['res_type']="success";
    }



?>