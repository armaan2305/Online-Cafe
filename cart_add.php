<?php
    require 'dbconnect/dbconnect.php';
    //require 'header.php';
    session_start();
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $add_to_cart_query="insert into users_items(user_id,item_id,status) values ('$user_id','$item_id','Added to cart')";
    $add_to_cart_result=mysqli_query($link,$add_to_cart_query) or die(mysqli_error($link));
    header('location: index.php');
?>