<?php require_once "scripts/session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <style>
        nav a.nav-link {
            color: #fff !important;
        }
    </style>

    <title>toktok</title>
</head>

<body style="background-image: url('images/bg.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
    <nav class="nav bg-dark">
        <?php if (!isset($_SESSION['user'])): ?>
        <a class="nav-link active" href="index.php">Customer Portal</a>
        <a class="nav-link" href="register.php">Worker Portal</a>
		<a class="nav-link" href="login.php">Login</a>
        <a class="nav-link" href="about.php">About Us</a>


        <?php elseif ($_SESSION['user']->name == 'admin'): ?>
        <a class="nav-link" href="managehall.php">Manage Workers</a>
        <a class="nav-link" href="admin.php">Manage Customers</a>
        <a class="nav-link" href="logout.php">Log Out</a>

        <?php else: ?>
        <a class="nav-link" href="logout.php">Log Out</a>
        <?php endif; ?>

    </nav>