<?php

include 'navbar.php';
try {

    $db = new PDO("mysql:host=localhost;dbname=mydb; charset=utf8", "root", "");
    $db->query("SET CHARACTER SET utf8");

} catch (PDOException $exception) {
    echo $exception . getMessage();
}


$sql = "SELECT * FROM imageGallery";
$images = $db->query($sql)->fetchAll();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/cef350f31b.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/my_web_site/view/public/css/imageGalleryStyle.css">
    <script src="https://kit.fontawesome.com/cef350f31b.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
</head>

<body>


<div class="container">

    <ul>

        <?php
            foreach ($images as $image){
                $imageSrc = $image["Image"].PHP_EOL;
                echo "        <li>
            <a href='#'>
                    <div class='hover-overlay-container'>
                    <img class='overlay-image' src='{$imageSrc}'/>
                    <div class='overlay-btn-container'>
                        <i class='fas fa-search-plus fa-6x'></i>
                    </div>
                </div>
            </a>
        </li> ";
            }


        ?>


    </ul>
</div>


</body>

</html>
