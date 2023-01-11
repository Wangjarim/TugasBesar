<?php 
require '../function/function.php';




//Cek apakah tombol sudah ditekan atau belom
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo
        "<script>
            alert('Pesanan berhasil');
            window.location.href = '../homepage.php';
        </script>";
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
                <h1>PESAN</h1>
            </div>
            <form action="" method="post">
                <div class="input">
                    <label for="username">Username:</label>
                    <input class="form-control" type="text" name="username_sewa" required placeholder="ISI USERNAME...." id="username" autocomplete="no"> <br>
                </div>
                <div class="input">
                    <label for="validationCustom04">Paket:</label>
                    <select class="form-select" name="paket" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>FAT BURNING (30 MINS)</option>
                        <option>20 MINUTE FULL BODY BLAST</option>
                        <option>BEGINNERS ARMS</option>
                        <option>INTERMEDIATE ARMS</option>
                        <option>UPPER BODY STRENGTHEN AND SCULPT (25 MINS)</option>
                        <option>BEGINNERS LEGS</option>
                        <option>INTERMEDIATE LEGS</option>
                        <option>STRONG LEAN LEGS (25 MINS)</option>
                        <option>BEGINNER DUMBBELL LEG WORKOUT</option>
                        </select><br>
                </div>
                <button class="btn btn-dark" type="submit" name="submit">BAYAR</button>
            </form>
        </div>
    </div>
    <!--login -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>