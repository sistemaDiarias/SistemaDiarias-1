<?php

session_start();
unset($_SESSION['servidor']);
header("Location: ../index.php");
