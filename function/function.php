<?php 
$connect=mysqli_connect("localhost", "root", "", "gym");


function query($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function regis($data){
    global $connect;
    $username=strtolower(stripslashes($data ["username"]));
    $password=mysqli_real_escape_string($connect, $data["password"]);
    $confirm_password=mysqli_real_escape_string($connect, $data["confirm_password"]);

    if($password!==$confirm_password){
        echo"<script>alert('password tidak sesuai')</script>";
    }

    $result=mysqli_query($connect, "SELECT username FROM users WHERE username='$username'");

    if(mysqli_fetch_assoc($result)){
        echo"<script>alert('username telah digunakan')</script>";
        return false;
    }

    $password=password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($connect, "INSERT INTO users VALUES('', '$username', '$password')");
    
    return mysqli_affected_rows($connect);
}

function tambah($data){

    global $connect;

    $username_sewa = $data ["username_sewa"];
    $paket = $data ["paket"];

    $query = "INSERT INTO admin  VALUES ('', '$username_sewa' ,'$paket')";
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}










?>