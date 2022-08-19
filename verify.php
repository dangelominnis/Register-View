<?php
$errors = array();
if (isset($_REQUEST['register'])) {
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $email2 = $_REQUEST['email2'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $password2 = $_REQUEST['password2'];

    if ($fname == '') {
        array_push($errors,'First name cannot be empty!');
    }

    if ($lname == '') {
        array_push($errors,'Last name cannot be empty!');
    }

    if ($phone == '') {
        array_push($errors,'Phone number cannot be empty!');
    }else {
        $phone_regex = "/^[0-9]{3}[-][0-9]{3}[-][0-9]{4}$/";
        if (!preg_match($phone_regex,$phone)) {
            array_push($errors,'Phone number should match the format ###-###-####.');
        }
    }
    if ($email == '' || $email2 == '') {
        array_push($errors,'Emails cannot be empty!');
    }else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors,'Email should contain @ and a period .');
        }
        if ($email != $email2) {
            array_push($errors,'Emails mismatched!');
        }   
    }

    if ($username == '') {
        array_push($errors,'Username cannot be empty!');
    }else {
        if (strlen($username) < 4 ) {
            array_push($errors,'Username should contain more than 3 characters!');
        }
    }
    $password_regex = '/^[0-9a-zA-z][^.(){}[\]]{3,9}$/';
    if ($password == '' || $password2 == '') {
        array_push($errors,'Passwords cannot be empty!');
    }else {
        if (!preg_match($password_regex,$password)) {
            array_push($errors,'Password should contain 4 to 10 characters and characters other than parenthesis (), braces [],
            periods, and curly brackets {}!');
        }
        if ($password != $password2) {
            array_push($errors,'Passwords mismatched!');
        }   
    }


    
    echo "<h3>Entered Data</h3>";
    echo "First name: ".$fname."<br>";
    echo "Last name: ".$lname."<br>";
    echo "Phone: ".$phone."<br>";
    echo "Email: ".$email."<br>";
    echo "Confirm Email: ".$email2."<br>";
    echo "Username: ".$username."<br>";
    echo "Password: ".$password."<br>";
    echo "Confirm Password: ".$password2."<br>";

    if (!empty($errors)) {
        echo "<h3>Errors</h3>";
        foreach ($errors as $value) {
            echo $value ."<br>";
        }
        echo "<h4>Validation failed!</h4>";
        echo "<button><a href='register.php'>Try again!</a></button>";
    }else{
        echo "<h3>No Errors, Data submitted!</h3>";
    }
}
?>