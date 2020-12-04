<?php
include_once "../base.php";
echo "<pre>";
print_r(array_keys($_POST));
echo "<pre>";

$voc=$_POST['vocab'];
$type=$_POST['type'];
$meaning=$_POST['meaning'];
$sentence=$_POST['sentence'];
$note=$_POST['note'];
$id=$_POST['id'];

echo $voc."<br>";
echo $type."<br>";
echo $meaning."<br>";
echo $sentence."<br>";
echo $note;
echo $id;

echo "<hr>";

/* 避免輸入英文句子時或筆記時，內容包含'符號，導致匯入回資料庫時出錯，
利用條件判斷使用者輸入的內容的句子或筆記內容中有'符號時，在前加上\(反斜線)轉譯特殊符號*/

//避免單字出現' 影響sql 語句輸入
if (strpos("$voc","'")){
    $a = explode("'",$voc);
    $voc= implode("\'",$a);
    echo "已加入\在'符號前";
}else{
     //if 輸入字串原本就沒有任何'符號 do nothing
}

 //避免意思出現' 影響sql 語句輸入
if (strpos("$meaning","'")){
    $a = explode("'",$meaning);
    $meaning= implode("\'",$a);
    echo "已加入\在'符號前";
}else{
     //if 輸入字串原本就沒有任何'符號 do nothing
}

//避免句子出現' 影響sql 語句輸入
if (strpos("$sentence","'")){
    $a = explode("'",$sentence);
    $sentence= implode("\'",$a);
}else{
    //if 輸入字串原本就沒有任何'符號 do nothing
}

//避免筆記出現' 影響sql 語句輸入
if (strpos("$note","'")){
    $a = explode("'",$note);
    $note= implode("\'",$a);
    echo "已加入\在'符號前";
}else{
     //if 輸入字串原本就沒有任何'符號 do nothing
}

 // $a 為使用一次的變數，所以重複使用沒有關係

 
// echo $voc;
// echo "<br>";
// echo $type;
// echo "<br>";
// echo $meaning;
// echo "<br>";
// echo $sentence;
// echo "<br>";
// echo $note;
// echo "<br>";

$sql="UPDATE vocabs SET `voc`='$voc', `type`='$type',`meaning`='$meaning', `sentence`='$sentence', `note`='$note' WHERE `id`='$id'" ;

// echo "<br>";

$pdo->exec($sql);
header("location:../index.php?content=vocabs_list");


// $pdo->exec($sql);

// // echo "<br>";
// // echo $sql;
// header("location:../main.php")

