<?php
session_start();
if(isset($_SESSION['rol']!=1)){
header('Location:index.php');
}
