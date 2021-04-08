<?php
//This includes the session file. This file contains code that starts/resumes a session.
//By having it in the header file, it will be included on every page, allowing session capability on every page across the website.
include_once 'includes/session.php'?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- jQuery UI -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- Site Style -->
        <link rel="stylesheet" href="css/site.css" />

        <title>Attendance - <?php echo $title?></title>
    </head>
    <body>
    
        <!-- Container Wrapper -->
        <div class="container">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="index.php">IT Conference</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="viewrecords.php">View Attendees</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        
                            <?php if(!isset($_SESSION['userid'])) { ?>
                                <li class="nav-item"><a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a></li>
                            <?php } else { ?>
                                <li class="nav-item"><a class="nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span> <span class="sr-only">(current)</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a></li>
                            <?php } ?>

                    </ul>
                </div>
            </nav>
            <br>