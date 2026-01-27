<?php
 try {
    $conn = mysqli_connect('localhost', 'root', '', 'php_11-12');
 } catch (Exception $e) {
    echo $e->getMessage();
 }
