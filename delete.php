<?php
require 'connectRandoDB.php';	
$v = $_GET['id'];
$req = ORM::for_table('hiking')->find_one($v);
$req->delete();

header('Location: ./read.php');
?>