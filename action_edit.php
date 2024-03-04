<?php
session_start();
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);
$id = $_POST['id'];

$update = $db->update("anime", $id, [
    "name" => $_POST['name'],
    "description" => $_POST['description'],
    "genre" => $_POST['genre'],
    "imageurl" => $_POST['picture']
]);

if($update){
    $_SESSION['status'] = "Record updated successfully";
    header('Location: index.php');
}
else{
    $_SESSION['status'] = "Error in updating record";
    header('Location: index.php');
}
?>