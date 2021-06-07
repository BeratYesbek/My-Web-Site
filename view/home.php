<?php



/*
try {

    $db = new PDO("mysql:host=localhost;dbname=mydb; charset=utf8", "root", "");
    $db->query("SET CHARACTER SET utf8");
    echo  'birşey';
} catch (PDOException $exception) {
    echo $exception . getMessage();
}

//get all
$sql = "SELECT * FROM users";
$users = $db->query($sql)->fetchAll();


$sql = "SELECT * FROM users WHERE id=1";
$users = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$sql = "INSERT INTO users SET FirstName =?,LastName=?,Email=?,Password=?";

$add = $db->prepare($sql);
$added = $add->execute([
    "Melih",
    "Dede",
    "melih@gmail.com",
    "123456",
]);

print_r($users);
*/

$imagePath = 'http://localhost/my_web_site/view/public/img/';

$db = new PDO("mysql:host=localhost;dbname=mydb; charset=utf8","root","");
$db -> query("SET CHARACTER SET utf8");
//get all
$sql = "SELECT * FROM users";
$users = $db -> query($sql) -> fetchAll();
echo $users;

include 'navbar.php';
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
    <script src="https://kit.fontawesome.com/cef350f31b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="http://localhost/my_web_site/view/public/css/style.css">


    <title>Hello, world!</title>

</head>

<body>


<div class="container">
    <div id="myimage-box">
        <div id="image">
            <img src="https://hatrabbits.com/wp-content/uploads/2017/01/random.jpg">
            <h4 style="text-align: center; padding: 5px;">Berat Yeşbek</h4>

        </div>

    </div>
    <div>
        <div>
            <h3 id="title">Who am I ?</h3>

            <p id="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, assumenda rerum. Pariatur cumque,
                maiores, fugit optio quas nam corporis in doloremque nihil, natus quod fuga doloribus neque non?
                Ducimus,
                corporis!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus odit ratione quia sit quas,
                dolorem
                exercitationem laboriosam rerum ducimus laudantium blanditiis aut. Sit modi a possimus ullam minus,
                ipsa provident.


            </p>

            <p id="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, assumenda rerum. Pariatur cumque,
                maiores, fugit optio quas nam corporis in doloremque nihil, natus quod fuga doloribus neque non?
                Ducimus,
                corporis!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus odit ratione quia sit quas,
                dolorem
                exercitationem laboriosam rerum ducimus laudantium blanditiis aut. Sit modi a possimus ullam minus,
                ipsa provident.


            </p>

            <p id="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, assumenda rerum. Pariatur cumque,
                maiores, fugit optio quas nam corporis in doloremque nihil, natus quod fuga doloribus neque non?
                Ducimus,
                corporis!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus odit ratione quia sit quas,
                dolorem
                exercitationem laboriosam rerum ducimus laudantium blanditiis aut. Sit modi a possimus ullam minus,
                ipsa provident.


            </p>

            <div class="row">
                <div class="col-md-6">
                    <h4 id="title">My Languages</h4>

                    <ul>
                        <li>
                            <img id="myLanguages" src="https://cdn.worldvectorlogo.com/logos/kotlin-1.svg">
                            <br>
                            <p style="text-align: center; color: #fff;">Kotlin</p>


                        </li>
                        <li>
                            <img id="java" src="https://logos-download.com/wp-content/uploads/2016/10/Java_logo_icon.png">
                            <br>
                            <p style="text-align: center; color: #fff;">Java</p>



                        </li>
                        <li>
                            <img id="myLanguages" src="<?= $imagePath; ?>c-logo-icon-28402-Windows.ico">
                            <br>
                            <p style="text-align: center; color: #fff;">C#</p>


                        </li>
                        <li>
                            <img id="myLanguages" src="<?= $imagePath; ?>Other-html-5-icon.png">
                            <br>
                            <p style="text-align: center; color: #fff;">HTML</p>



                        </li>
                        <li>
                            <img id="myLanguages" src="<?= $imagePath; ?>bootstrap-social-media-icons-html-css-js-logo-11563293145uql7yehdq3.png">
                            <br>
                            <p style="text-align: center; color: #fff;">CSS</p>

                        </li>
                        <li>
                            <img id="myLanguages" src="<?= $imagePath; ?>313-3133777_javascript-transparent-background-svg-hd-png-download.png">
                            <br>
                            <p style="text-align: center; color: #fff;">JS</p>


                        </li>


                    </ul>


                </div>
                <div class="col-md-6">
                    <h4 id="title">My Tools</h4>
                    <ul>
                        <li>
                            <img style="margin-left: 3px;" id="myLanguages" src="<?= $imagePath; ?>4e747c82368d9681b75d54f56319dae7.png">
                            <br>
                            <p  style="max-width:60px; text-align: center;  color: #fff; word-wrap: break-word;">Android Studio</p>


                        </li>

                        <li>
                            <img id="myLanguages" src="<?= $imagePath; ?>visual-studio-2019.png">
                            <br>
                            <p  style="max-width:60px; text-align: center;  color: #fff; word-wrap: break-word;">Visual Studio</p>
                        </li>
                        <li>
                            <img id="myLanguages"  src="<?= $imagePath; ?>1024px-Visual_Studio_Code_1.35_icon.svg.png">
                            <br>
                            <p  style="max-width:60px; text-align: center;  color: #fff; word-wrap: break-word;">Visual Code</p>
                        </li>
                        <li>
                            <img id="myLanguages" src="<?= $imagePath; ?>intellij-idea-569199.png">
                            <br>
                            <p  style="max-width:60px; text-align: center;  color: #fff; word-wrap: break-word;">Intellij Idea</p>
                        </li>
                        <li>
                            <img id="myLanguages" src="<?= $imagePath; ?>pycharm-PyCharm_400x400_Twitter_logo_white.png">
                            <p  style="max-width:70px; text-align: center;  color: #fff; word-wrap: break-word;">PyCharm</p>


                        </li>
                    </ul>

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <h4 id="title">My Frameworks</h4>

                <ul>
                    <li>
                        <img style="margin-left: 8px;" id="myLanguages" src="<?= $imagePath; ?>21_Angular-512.png">
                        <p  style="max-width:70px; text-align: center;  color: #fff; word-wrap: break-word;">Angular</p>

                    </li>
                    <li>
                        <img style="margin-left: 8px;" id="myLanguages" src="<?= $imagePath; ?>1183672.png">
                        <p  style="max-width:70px; text-align: center;  color: #fff; word-wrap: break-word;">React</p>

                    </li>
                    <li>
                        <img  style="margin-left: 20px;" id="myLanguages" src="<?= $imagePath; ?>68747470733a2f2f70726f642d616362352e6b7863646e2e636f6d2f77702d636f6e74656e742f75706c6f6164732f323031382f30322f737072696e672d626f6f742d69636f6e2d323030783139362e706e67.png">
                        <p  style="max-width:70px; text-align: center;  color: #fff; word-wrap: break-word;">Spring Boot</p>

                    </li>
                    <li>
                        <img  style="margin-left: 5px;" id="myLanguages" src="<?= $imagePath; ?>NET_Core_Logo.svg.png">
                        <p  style="max-width:70px; text-align: center;  color: #fff; word-wrap: break-word;">.Net</p>

                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4 id="title">My Databases</h4>

                <ul>
                    <li>
                        <img  style="margin-left: 5px;" id="myLanguages" src="<?= $imagePath; ?>google_firebase-2-512.png">
                        <p  style="max-width:70px; text-align: center;  color: #fff; word-wrap: break-word;">Firebase</p>
                    </li>
                    <li>
                        <img  style="margin-left: 15px;" id="myLanguages" src="<?= $imagePath; ?>postgresql-226047.png">
                        <p  style="max-width:80px; text-align: center;  color: #fff; word-wrap: break-word;">Postgresql</p>
                    </li>
                    <li>
                        <img  style=" margin-left: 5px;" id="myLanguages" src="<?= $imagePath; ?>mysql-19-1174939.png">
                        <p  style="max-width:70px; text-align: center;  color: #fff; word-wrap: break-word;">My SQL</p>
                    </li>
                </ul>
            </div>

        </div>
        <div class="social-media">

            <h4 id="social-media-title">Contact With Me</h4>
            <ul>
                <li>
                    <a href="https://www.instagram.com/beratybk/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram-square fa-2x"></i></a>

                </li>
                <li>
                    <a href="https://twitter.com/BeratYesbekk" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter-square fa-2x"></i></a>

                </li>
                <li>
                    <a href="mailto:beratyesbek@gmail.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-google-plus-g fa-2x"></i></a>

                </li>
                <li>
                    <a href="https://github.com/BeratYesbek" target="_blank" rel="noopener noreferrer"><i class="fab fa-github-square fa-2x"></i></a>

                </li>
                <li>
                    <a href="https://www.linkedin.com/in/berat-yesbek-89b6821b0/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin fa-2x"></i></a>

                </li>
            </ul>
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



