<?php
if(isset($_GET['lastName'], $_GET['firstName']) && !empty($_GET['lastName'] && $_GET['firstName'])){
    echo $_GET['lastName']. " " .$_GET['firstName'];
}

if(isset($_POST['lastName'], $_POST['firstName']) && !empty($_POST['lastName'] && $_POST['firstName'])){
    echo $_POST['lastName']. " " .$_POST['firstName'];
}