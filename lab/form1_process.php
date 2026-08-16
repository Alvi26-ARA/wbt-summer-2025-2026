<?php

require_once "db.php";


// Error variables

$nameErr = "";
$phoneErr = "";
$dobErr = "";
$emailErr = "";
$passwordErr = "";
$termsErr = "";

$dbErr = "";


// Input variables

$name = "";
$phone = "";
$dob = "";
$email = "";

$isValid = false;



// Clean input

function cleanInput($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {



    // Full Name Validation

    if (empty($_POST["name"])) {

        $nameErr = "Enter your full name";

    } 
    else {

        $name = cleanInput($_POST["name"]);

        if (!preg_match("/^[a-zA-Z-' ]+$/", $name)) {

            $nameErr = "Only letters and spaces are allowed";

        } 
        elseif (strlen($name) < 3) {

            $nameErr = "Name must be at least 3 characters";

        }

    }





    // Phone Validation

    if (empty($_POST["phone"])) {

        $phoneErr = "Enter your phone number";

    } 
    else {

        $phone = cleanInput($_POST["phone"]);


        if (!preg_match("/^[0-9]{10,15}$/", $phone)) {

            $phoneErr = "Phone number must be 10 to 15 digits";

        }

    }







    // Date of Birth Validation

    if (empty($_POST["dob"])) {

        $dobErr = "Enter your date of birth";

    } 
    else {


        $dob = cleanInput($_POST["dob"]);


        $today = new DateTime();

        $birth = DateTime::createFromFormat("Y-m-d", $dob);



        if (!$birth || $birth->format("Y-m-d") != $dob) {

            $dobErr = "Enter a valid date";

        }

        elseif ($birth > $today) {

            $dobErr = "Date cannot be future date";

        }

        elseif ($birth->diff($today)->y < 18) {

            $dobErr = "You must be at least 18 years old";

        }

    }







    // Email Validation

    if (empty($_POST["email"])) {

        $emailErr = "Enter your email address";

    } 
    else {


        $email = cleanInput($_POST["email"]);


        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $emailErr = "Enter a valid email address";

        }

    }







    // Password Validation

    if (empty($_POST["password"])) {

        $passwordErr = "Enter password";

    } 
    else {


        $password = $_POST["password"];



        if (strlen($password) < 8) {

            $passwordErr = "Password must be at least 8 characters";

        }

        elseif (
            !preg_match("/[A-Za-z]/", $password) ||
            !preg_match("/[0-9]/", $password)
        ) {

            $passwordErr = "Password must contain letter and number";

        }

    }







    // Terms Checkbox

    if (empty($_POST["terms"])) {

        $termsErr = "You must accept Terms & Privacy Policy";

    }







    // Check Validation

    $isValid = 
        !$nameErr &&
        !$phoneErr &&
        !$dobErr &&
        !$emailErr &&
        !$passwordErr &&
        !$termsErr;








    // Insert Data

    if ($isValid) {


        $passwordHash = password_hash(
            $password,
            PASSWORD_DEFAULT
        );



        $query = 
        "INSERT INTO workspace_users
        (name, phone, dob, email, password)
        VALUES (?, ?, ?, ?, ?)";



        $stmt = mysqli_prepare($conn, $query);



        // Check prepare error

        if ($stmt === false) {

            die("Prepare failed: " . mysqli_error($conn));

        }





        mysqli_stmt_bind_param(

            $stmt,

            "sssss",

            $name,

            $phone,

            $dob,

            $email,

            $passwordHash

        );






        if (!mysqli_stmt_execute($stmt)) {


            $dbErr = "Database Error: " . mysqli_stmt_error($stmt);

            $isValid = false;


        }



        mysqli_stmt_close($stmt);


    }


}

?>