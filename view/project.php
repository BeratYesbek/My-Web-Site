<?php

$imagePath = 'http://localhost/my_web_site/view/public/img/';
include 'navbar.php';

try {

    $db = new PDO("mysql:host=localhost;dbname=mydb; charset=utf8", "root", "");
    $db->query("SET CHARACTER SET utf8");

} catch (PDOException $exception) {
    echo $exception . getMessage();
}


$sql= "SELECT * FROM projects";
$projects = $db->query($sql)->fetchAll();


?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="http://localhost/my_web_site/view/public/css/projectStyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cef350f31b.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
</head>
<body>


<div class="container">
    <ul id="projects">
    <?php

        foreach ($projects as $project){
            $image = $project["Image"] . PHP_EOL;
            $title = $project["Title"] . PHP_EOL;
            $content = $project["Content"] . PHP_EOL;
            $projectUrl = $project["ProjectUrl"] . PHP_EOL;

            echo "    <li>
            <a href=''>
                <div id='box'>
                    <div id='image-project'>
                        <img src='{$image}'>
                    </div>
                    <div id='box-content'>
                        <h3 id='title'>$title</h3>
                        <a href={$projectUrl}'><i class='fab fa-github-square fa-2x'></i></a>
                        <p>'{$content}'</p>
                    </div>
                </div>
            </a>

        </li>";

        }
    ?>



    </ul>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>