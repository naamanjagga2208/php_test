<?php
    include './connection.php';

    $error = [];
    if(isset($_POST['full_name']) && $_POST['full_name']==""){
        $fullName = validateAndSanitize($_POST['full_name']);
    } else {
        $error["full_name"] = "Please Provide Full Name";
    }
    if(isset($_POST['phone_number']) && $_POST['phone_number']==""){
        $phoneNumber = validateAndSanitize($_POST['phone_number']);
    } else {
        $error["full_name"] = "Please Provide Phone Number";
    }
    if(isset($_POST['email']) && $_POST['email']==""){
        $email = validateAndSanitize($_POST['email']);
    } else {
        $error["full_name"] = "Please Provide Email";
    }
    if(isset($_POST['subject']) && $_POST['subject']==""){
        $subject = validateAndSanitize($_POST['subject']);
    } else {
        $error["full_name"] = "Please Provide Subject";
    }
    if(isset($_POST['message']) && $_POST['message']==""){
        $message = validateAndSanitize($_POST['message']);
    } else {
        $error["full_name"] = "Please Provide Message";
    }

    if(!empty($error)) {
        $uniqueQuery = 'SELECT * FROM contact_form WHERE "email" = '.$email.'';
        $result = $conn->query($uniqueQuery);
        if($result->fetch_num_row() > 0) {

        } else {
            $query = 'INSERT INTO contact_form ("full_name","phone_number","email","subject","message","user_ip","time_stamp") VALUES('.$fullName.','.$phoneNumber.','.$email.','.$subject.','.$message.','.$_SERVER['REMOTE_ADDR'].','.strtotime().')';
            $result = $conn->query($query);
        }

    }



    function validateAndSanitize ($input) {
        return htmlspecialchars(trim($input))
    }
?>