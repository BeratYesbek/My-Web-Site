<?php

error_reporting(0);
$route = $_GET['route'];
$viewPath = __DIR__.'/view/';

if( !$route ) {
print 'route not found';
}

switch ($route) {
    case 'home':
        require $viewPath.'home.php';
        break;

    case 'login':
        require $viewPath . 'login.php';
        break;
    case 'projects':
        require $viewPath . 'project.php';
        break;

    case 'map':
        require $viewPath . 'map.php';
        break;

    case 'cv':
        require $viewPath . 'cv.php';
        break;

    case 'blog':
        require $viewPath . 'blog.php';
        break;
    case 'imageGallery':
        require $viewPath . 'imageGallery.php';
        break;
    case 'videoGallery':
        require $viewPath . 'videoGallery.php';
        break;

    case 'newsAndAnnouncements':
        require $viewPath . 'newsAndAnnouncements.php';
        break;
    default:
        require $viewPath.'login.php';
        break;}

//    require __DIR__.'/view/home.php';