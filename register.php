<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-box">
        <div class="box-head">
            <h1>Register for a New Account</h1>
        </div>
        <form action="verify.php" method="POST">
            <div class="box-body">
                <div class="center">
                    <h2>Your Information</h2>
                </div>
                <input type="text" class="inp" name="fname" placeholder="first name">
                <input type="text" class="inp" name="lname" placeholder="last name">
                <input type="text" class="inp" name="phone" placeholder="phone ###-###-####">
                <input type="text" class="inp" name="email" placeholder="email address">
                <input type="text" class="inp" name="email2" placeholder="email address">
                
                <div class="center">
                    <h2>Log In Information</h2>
                </div>
                
                <input type="text" class="inp" name="username" placeholder="username">
                <input type="password" class="inp" name="password" placeholder="password">
                <input type="password" class="inp" name="password2" placeholder="password again">
            </div>
            <button type="submit" name="register">Register</button>
        </form>
    </div>
</body>
</html>