<?php

include 'config.php';

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    mysqli_query($conn, "INSERT INTO users (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')");
    header("Location: indexcrud.php");
    exit();
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    mysqli_query($conn, "UPDATE users SET name='$name', email='$email', phone='$phone', address='$address' WHERE id='$id'");
    header("Location: indexcrud.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    mysqli_query($conn, "DELETE FROM users WHERE id='$id'");
    header("Location: indexcrud.php");
    exit();
}