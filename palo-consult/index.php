<?php 
session_start();
require("startApp.php");
$titulo = "Inicio";
$template_seccion = "templates/home.php";
include 'templates/main.php';
include("endApp.php");
