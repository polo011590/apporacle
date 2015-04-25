<?php

session_start();
unset($_SESSION["id"]);
oci_close($c);
session_destroy();
header('Location:../../index.PHP');

