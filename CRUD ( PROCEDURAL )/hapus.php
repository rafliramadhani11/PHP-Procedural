<?php

require "functions.php";

if (hapus($_GET['id']) > 0) {
    header("Location: index.php");
    exit();
}
