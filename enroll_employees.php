<?php

ob_start();

?>


<style>
    p {
        font-size: 20px;
    }

    #savebtn {
        position: fixed;
        right: 20px;
        bottom: 80px;
        border-radius: 50%;
        border: none;
        color: white;
        background-color: #00acc1;
        border-color: #00acc1;
        width: 60px;
        height: 60px;
        cursor: pointer;
        z-index: 9999;
    }

    #savebtn:hover {
        color: #fff;
        background-color: #008a9b;
    }

    p.mdi-content-save-all {
        font-size: 33px;
    }
</style>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Enroll Employees</li>
                </ol>
            </div>
            <h4 class="page-title">Employees Dashboard</h4>
        </div>
    </div>
</div>
<!-- end page title -->


<div class="bg-white d-block p-5" style="height: 70vh;">
    <p class="mdi mdi-plus-circle"> Enroll Employees</p>
    <div class="d-block" style="height:2px; background-color:#564a4a26;"></div>
    <div class="d-block p-1"></div>
    <?php
    include 'enroll_employees_code.php';

    if (isset($_SESSION['response'])) { ?>
        <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <b class=""><?= $_SESSION['response']; ?></b>
        </div>
    <?php }
    unset($_SESSION['response']); ?>

    <form action="enroll_Employees_code.php" method="post">
        <div class="row">
            <div class="col-md-6 form-group mb-3 mt-4">
                <label for="">Employee ID</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text mdi mdi-shield-key" id="inputGroupPrepend"></span>
                    </div>
                    <input type="text" class="form-control" name="employee_id" id="" placeholder="Type employee id here.." aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
            <div class="col-md-6 form-group mb-3 mt-4">
                <label for="">Employee Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text mdi mdi-account" id="inputGroupPrepend"></span>
                    </div>
                    <input type="text" class="form-control" name="first_name" id="" placeholder="Type employee name here.." aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 form-group mb-3">
                <label for="">Employee Last Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text mdi mdi-account" id="inputGroupPrepend"></span>
                    </div>
                    <input type="text" class="form-control" name="last_name" id="" placeholder="Type employee last name here.." aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
            <select class="wide" data-plugin="customselect" style="display: none;">
                <option value="0">Nothing</option>
                <option value="1">Some option</option>
                <option value="2">Another option</option>
                <option value="3" disabled="">A disabled option</option>
                <option value="4">Potato</option>
            </select>
        </div>

        <div class="row">
            <div class="col-md-6 form-group mb-3">
                <label for="">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text mdi mdi-email" id="inputGroupPrepend"></span>
                    </div>
                    <input type="text" class="form-control" name="email" id="validationCustomUsername" placeholder="Type employee email address here.." aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
        </div>
        <button type="submit" name="employees" id="savebtn">
            <p class="mdi mdi-content-save-all"></p>
        </button>
    </form>

</div>
<div class=" d-block p-3" style=""></div>

<?php
$section = ob_get_contents();
ob_end_clean();
include_once("master_page.php");
?>