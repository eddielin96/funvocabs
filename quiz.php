<?php
include_once "base.php";

$sql = "SELECT `voc`,`meaning` FROM vocabs ORDER BY rand() LIMIT 1 ";
$test = $pdo->query($sql)->fetch();

// print_r ($test);
// echo "<br>";
// print_r ($test['voc']); //抽考的單字答案
// echo "<br>"; 
// print_r ($test['meaning']); //單字意思顯示提示

$voc = $test['voc']; //抽考的單字答案
$meaning = $test['meaning']; //單字意思顯示提示
// echo "<br>";
// echo $voc."<br>";
// echo $meaning."<br>";
// print_r($_GET);

$result="";
// if (isset($_POST['vocab'])){
//     if ($_POST['vocab'] == "$voc"){
//         $result = "correct";
//     }else{
//         $result = "wrong";
//     }
// }
?>


<div>
<form action="index.php?content=quiz&voc=<?=$voc?>&meaning=<?=$meaning?>" method="post">
<table class="d-flex justify-content-center">
    <tr class="text-center bg-warning">
        <td style="width:200px;">Voc</td>
        <td style="width:200px">Meaning</td>
    </tr>
    <tr style="background:#ffc107a3; height:100px;" class="text-center ">
        <td><input type="text" name="vocab" style="width:50%;" ><br><span style="color:red"></span></td>
        <td><div><?=$meaning?></div></td>
    </tr>
    <tr style="background:#ffc107a3">
        <td colspan="2" class="text-center text-danger py-3"></td>
    </tr>
    <tr style="background:#ffc107a3">
        <td colspan="2" class="text-center"><input type="submit" value="send"></td>
    </tr>
</table>
</form>
</div>

<?php
if (!empty($_GET['voc'])){
    include_once ('api/test_result.php');
}

?>
