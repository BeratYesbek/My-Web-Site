<?php
include 'navbar.php';


try {

    $db = new PDO("mysql:host=localhost;dbname=mydb; charset=utf8", "root", "");
    $db->query("SET CHARACTER SET utf8");

} catch (PDOException $exception) {
    echo $exception . getMessage();
}


$sqlBlog = "SELECT * FROM blogs";
$blogs = $db->query($sqlBlog)->fetchAll();

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/my_web_site/view/public/css/blogStyle.css">
    <script src="https://kit.fontawesome.com/cef350f31b.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
</head>
<body>



<div class="container">
    <?php
        for ($i = 0; $i<1; $i++){
            $blog = $blogs[$i];
            $image = $blog["Image"] . PHP_EOL;
            $title = $blog["Title"] . PHP_EOL;
            $content = $blog["Content"] . PHP_EOL;
            $label1 = $blog["label1"] . PHP_EOL;
            $label2 = $blog["label2"] . PHP_EOL;
            $label3 = $blog["label3"] . PHP_EOL;
            $label4 = $blog["label4"] . PHP_EOL;

            echo "
<h1 id='title'>{$title}</h1>

    <div class='content-text'>
                <p>'{$content}'</p>

</div>
    <div class='image'>
        <img src='{$image}' >
    </div>

<div class='info'>
        <ul>
            <li>
                <div class='tag'>
                    <p>{$label1}</p>
                </div>
            </li>
            <li>
                <div class='tag'>
                    <p>{$label2}</p>

                </div>
            </li>
            <li>
                <div class='tag'>
                    <p>{$label3}</p>

                </div>
            </li>
            <li>
                <div class='tag'>
                    <p>{$label4}</p>

                </div>
            </li>
        </ul>
    </div>
";

        }

    ?>




</div>


</body>
</html>
