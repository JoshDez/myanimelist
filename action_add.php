<?php
session_start();
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);
$insert = $db->insert("anime",[
    "name" => $_POST['name'],
    "description" => $_POST['description'],
    "genre" => $_POST['genre'],
    "imageurl" => $_POST['picture']
]);

if($insert){
    $_SESSION['status'] = "Record added successfully";
    header('Location: index.php');
}
else{
    $_SESSION['status'] = "Error in adding record";
    header('Location: index.php');
}
?>