<?php


$route = "http://localhost/my_web_site/index.php?route=";

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/my_web_site/view/public/css/navbarStyle.css">
    <title>Hello, world!</title>
</head>
<body>
<div id="mySidenav" class="sidenav">

    <div id="image-box">
        <img src="https://hatrabbits.com/wp-content/uploads/2017/01/random.jpg">
        <h4 id="userName"></h4>

    </div>
    <div id="links">

        <a href="<?=$route?>home">Home</a>
        <a href="<?=$route?>projects">Projects</a>
        <a href="<?=$route?>blog">Blog</a>
        <a href="<?=$route?>map">Map</a>
        <a href="<?=$route?>newsAndAnnouncements">New And Announcements</a>
        <a href="<?=$route?>imageGallery">Image Gallery</a>
        <a href="<?=$route?>videoGallery">Video Gallery</a>
        <a href="<?=$route?>cv">Cv</a>



        <a href="#">Sign Out<i style="margin: 5px" class="fas fa-sign-out-alt"></i></a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>