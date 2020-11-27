<?php

$dsn="mysql:host=localhost;dbname=funvocabs;charset=utf8mb4;";
$pdo=new PDO($dsn,'root','');
// utf8 改成 utf8mb4 為了怕筆記內容有表情符號出現亂碼存不進去資料庫故更改
/* 另外也在mysql輸入以下語法改變編碼 以讓mysql 可以判讀emoji 


ALTER TABLE

    table_name <- 輸入資料表的名稱

    CONVERT TO CHARACTER SET utf8mb4

    COLLATE utf8mb4_unicode_ci;
 */
date_default_timezone_set("Asia/Taipei");


?>