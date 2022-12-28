<?php 
require'../function/function.php';
if(isset($_POST["submit"])){

    if(regis($_POST) >0){
        echo"<script>alert('user baru berhasil ditambahkan')</script>";
    } else{
        echo mysqli_error($connect);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

   


    <div class="example-box">
        <div class="background-shapes"></div>
        <div class="login">
        <div class="judullogin">
            <h1>Register</h1>
        </div>
        <form action="" method="post">
            <div class="input">
                <label for="username">Username:</label>
                <input class="form-control" type="text" name="username" required placeholder="ISI USERNAME...." id="username" autocomplete="no"> <br>
            </div>
            <div class="input">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" required placeholder="PASSWORD...." id="password"> <br>
            </div>
            <div class="input">
                <label for="password">Confirm Password:</label>
                <input class="form-control" type="password" name="confirm_password" required placeholder="CONFIRM YOUR PASSWORD...." id="password"> <br>
            </div>
            <button class="btn btn-dark" type="submit" name="submit">REGISTER</button>
        </form>
        <a href="../login/login.php" class="text-white">BACK</a>
    </div>
    </div>
    <!--login -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>