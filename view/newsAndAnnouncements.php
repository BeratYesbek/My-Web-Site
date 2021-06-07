<?php
include 'navbar.php';

try {

    $db = new PDO("mysql:host=localhost;dbname=mydb; charset=utf8", "root", "");
    $db->query("SET CHARACTER SET utf8");

} catch (PDOException $exception) {
    echo $exception . getMessage();
}


$sqlNews = "SELECT * FROM news";
$news = $db->query($sqlNews)->fetchAll();

$sqlAnnouncements = "SELECT * FROM announcements";
$announcements = $db->query($sqlNews)->fetchAll();


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
    <link rel="stylesheet" href="http://localhost/my_web_site/view/public/css/newsAndAnnouncementsStyle.css">
    <script src="https://kit.fontawesome.com/cef350f31b.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4 style="text-align: center; color:#fff; border-bottom: 1px solid #fff;">News</h4>

            <ul>
                <?php foreach ($news as $singleNews) {
                    $image = $singleNews["Image"] . PHP_EOL;
                    $title = $singleNews["Title"] . PHP_EOL;
                    $content = $singleNews["Content"] . PHP_EOL;

                    echo "
                <li class='show'>
                    <div id='box' class='row'>
                        <div class='col-md-3''>
                            <div id='news-image'>
                                <img src='{$image}'>
                            </div>
                        </div>
                        <div class='col-md-9'>
                            <h4 id='news-title'>'{$title}'</h4>
                            <p>'{$content}'</p>
                        </div>
                    </div>
                </li>

                   ";
                } ?>


            </ul>


        </div>
        <div class="col-md-6">
            <h4 style="text-align: center; color:#fff; border-bottom: 1px solid #fff;">Announcements</h4>

            <ul>
                <?php
                foreach ($announcements as $announcement) {
                    $image = $announcement["Image"] . PHP_EOL;
                    $title = $announcement["Title"] . PHP_EOL;
                    $content = $announcement["Content"] . PHP_EOL;
                }
                echo "
                                    <li class='show'>
                    <div id='box' class='row'>
                        <div class='col-md-3''>
                            <div id='news-image'>
                                <img src='{$image}'>
                            </div>
                        </div>
                        <div class='col-md-9'>
                            <h4 id='news-title'>'{$title}'</h4>
                            <p>'{$content}'</p>
                        </div>
                    </div>
                </li>";
                ?>


            </ul>
        </div>
    </div>


</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>

