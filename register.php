<?php

$con = mysqli_connect("localhost", "root", "", "infogro_db");



$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['optradio'];
$college = $_POST['college'];
$department = $_POST['dept1'];
$internship = $_POST['intern1'];
$register = $_POST['regno'];
$yopo = $_POST['yopo'];
$contact = $_POST['contact'];
$email = $_POST['email'];

if ($department == 'dept') {
    $department = $_POST['dept'];
}

if ($internship == 'intern') {
    $internship = $_POST['intern'];
}



// note that the if is asking if there is no result
$result = mysqli_query($con, "SELECT register from students2 WHERE register=" . $register);

if ($result and mysqli_num_rows($result) > 0) {
    echo "<script>
    var answer = window.alert('Already Registered.');
    window.location.href='index.php';
    </script>";
} else {
    $sql1 = mysqli_query($con, "INSERT INTO students2(`firstname`, `lastname`, `gender`, `college`, `department`, `internship`, `register`, `yopo`, `contact`, `email`)
                        VALUES('$firstname', '$lastname','$gender', '$college', '$department', '$internship', '$register', '$yopo', '$contact', '$email')");
    header("Location: success.php");
    die();
}

