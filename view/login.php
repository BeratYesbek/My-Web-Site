<?php

try {

    $db = new PDO("mysql:host=localhost;dbname=mydb; charset=utf8", "root", "");
    $db->query("SET CHARACTER SET utf8");

} catch (PDOException $exception) {
    echo $exception . getMessage();
}

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];

$loginEmail = $_POST["emailLogin"];
$loginPassword = $_POST["passwordLogin"];


if ($loginEmail != null && $loginPassword != null) {
    echo 'got it 1';
    $sql = "SELECT * FROM users WHERE Email=$loginEmail and Password=$loginPassword";
    $users = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    if ($users != null) {
        require 'home.php';
    }


}


if ($firstName != null && $lastName != null && $email != null && $password != null) {


    $sql = "INSERT INTO users SET FirstName =?,LastName=?,Email=?,Password=?";

    $add = $db->prepare($sql);
    $added = $add->execute([
        "Melih",
        "Dede",
        "melih@gmail.com",
        "123456",
    ]);
    require 'home.php';


}


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/my_web_site/view/public/css/loginStyle.css">
    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <div class="row">
        <button id="btn-sign-in">Sign In</button>

        <button id="btn-sign-up">Sign Up</button>
    </div>
</div>


<div id="signUpModel" class="modal">

    <div class="modal-content">
        <div class="modal-header">
            <span id="close" class="close">&times;</span>
            <h2 style="float: left;">Sign Up</h2>
        </div>
        <div class="modal-body">
            <form action="http://localhost/my_web_site/index.php?route=login" method="post">
                <input type="text" name="firstName" placeholder="First Name">
                <input type="text" name="lastName" placeholder="Last Name">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button id="signIn" type="submit">Sign Up</button>
            </form>

        </div>

    </div>

</div>


<div id="signInModel" class="modal">

    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2 style="float: left;">Sign In</h2>
        </div>
        <div class="modal-body">
            <input type="text" name="emailLogin" placeholder="email">
            <input type="password" name="passwordLogin" placeholder="password">
            <button id="login">Login</button>
        </div>

    </div>

</div>


<script>

    var signInModel = document.getElementById("signInModel");
    var signUpModel = document.getElementById("signUpModel");

    var btnSignIn = document.getElementById("btn-sign-in");
    var btnSignUp = document.getElementById("btn-sign-up");


    var span1 = document.getElementsByClassName("close")[0];
    var span2 = document.getElementsByClassName("close")[1];


    btnSignIn.onclick = function () {
        signInModel.style.display = "block";
    }

    btnSignUp.onclick = function () {
        signUpModel.style.display = "block"
    }


    span1.onclick = function () {
        signInModel.style.display = "none";
        signUpModel.style.display = "none"

    }

    span2.onclick = function () {
        signInModel.style.display = "none";
        signUpModel.style.display = "none"

    }
    window.onclick = function (event) {
        if (event.target == signInModel || event.target == signUpModel) {
            signInModel.style.display = "none";
            signUpModel.style.display = "none";

        }
    }

</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>
