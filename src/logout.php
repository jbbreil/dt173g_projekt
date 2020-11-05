<?php
session_start(); //hämtar session sparade data
session_unset(); // rensa upp alla sessioner
session_destroy();

header('Location: index');
exit();