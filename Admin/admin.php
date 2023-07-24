<?php

if (session_id() == '') {
    session_start();
}

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}

// If admin correctly login then redirect him to the login.php page