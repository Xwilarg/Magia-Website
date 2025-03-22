<?php

require_once "vendor/autoload.php";

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader(["templates"]);
$twig = new Environment($loader);

$data = json_decode(file_get_contents("data/data.json"), true);

echo $twig->render("index.html.twig", [
    "data" => $data
]);