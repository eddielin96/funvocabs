<?php
include_once "../base.php";

$value="{$_GET['id']}";

$sql = "DELETE FROM `vocabs` WHERE `id`='$value'";

// echo $sql;

$pdo->exec($sql);

header("location:../index.php?content=vocabs_list");
?>