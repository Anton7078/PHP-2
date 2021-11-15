<?php
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once 'base.php';
require_once dirname(__DIR__).'/vendor/autoload.php';
$loader = new FilesystemLoader(dirname(__DIR__).'/templates');

$twig = new Environment( $loader, [
    'cache' => dirname(__DIR__).'/cache'
]);

if ($_GET['page'] && $_GET['page'] == 'img') {
    $resultImg = mysqli_query($link, 'select * from images where id='.$_GET['id']);
    $image = mysqli_fetch_assoc($resultImg);
    if ($image) {
        echo $twig->render('home/index_img.twig.html', [ 'source' => $image['name'],
            'page' => '',
            'rowId' => '']);
    }
} else {
while ($row = mysqli_fetch_assoc($result)){
echo $twig->render('home/index.twig.html', [ 'source' => $row['name'],
    'page' => 'img',
    'rowId' => $row['id']]);
}}
