<?php
require '../app/core/Controller.php';
require '../app/controllers/HomeController.php';

$controller = new HomeController();
$controller->index();
