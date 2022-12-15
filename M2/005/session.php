<?php
session_start();

// var_dump($_SESSION);

//Luu tru
$_SESSION['ho_va_ten'] = 'Nguyen Van A';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

