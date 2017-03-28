<?php
include 'api/connection.php';
$stmt = $db->prepare("SELECT image FROM quote WHERE id=?");
$stmt->execute(array($_GET['id']));
header("Content-type: image/jpeg");
echo $stmt->fetchColumn();