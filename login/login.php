<?php 
require '../function/function.php';

if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $result=mysqli_query($connect, "SELECT * FROM users WHERE username='$username'");

    if(mysqli_num_rows($result) ===1){

        $row=mysqli_fetch_assoc($result);

        $verify=password_verify($password, $row["password"]);

        if($verify){
            echo"<script>window.location.href='../homepage.php'</script>";
            exit;
        }
    }

    $result2 = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
    $cek = mysqli_num_rows($result2);

    if($cek > 0){
        global $result2;

        $data = mysqli_fetch_assoc($result2);

        if($data["level"] === "admin"){
            header("location: ../admin/dashboard/dashboard.php");
        }

    }
    $error=true;
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
            <h1>Login</h1>
        </div>
        <?php if(isset($error)): ?>
        <p class="text-warning">Username atau Password Salah</p>
        <?php endif; ?>
        <form action="" method="post">
            <div class="input">
                <label for="username">Username:</label>
                <input class="form-control" type="text" name="username" required placeholder="ISI USERNAME...." id="username" autocomplete="no"> <br>
            </div>
            <div class="input">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" required placeholder="PASSWORD...." id="password"> <br>
            </div>
            <button class="btn btn-dark" type="submit" name="submit">LOGIN</button>
        </form>
        <p>Haven't An Account? <a href="../regis/register.php" class="text-white">SIGN UP</a></p>
    </div>
    </div>
    <!--login -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>