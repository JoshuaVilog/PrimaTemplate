<?php
session_start();

$route = $_GET['route'] ?? 'login';

$allowedRoutes = ['home', 'login', 'dashboard', 'logout'];

if (!in_array($route, $allowedRoutes)) {
    http_response_code(404);
    echo "404 - Page not found";
    exit;
}

if ($route === 'logout') {
    session_destroy();
    header("Location: login");
    exit;
}

if (!isset($_SESSION['USER_CODE']) && $route != "login") {
    header("Location: login");
    exit();
}

include 'includes/header.php';
include 'includes/script.php';
include "views/$route.php";

