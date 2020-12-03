<?php
// echo "這是表單傳來的題目".print_r($_GET); // 傳來表單的題目
// echo "<br>";
// echo "這是表單傳來的答案".print_r($_POST); // 表單的答案
// echo "<br>";

$answer = $_GET['voc'];
$meaning = $_GET['meaning'];
$inputanswer = $_POST['vocab'];

if ("$answer"=="$inputanswer"){
    $result = "<span style='color:green'>excellent</span>";
}else{
    $result = "<span style='color:red'>wrong</span>";
}

?>
Your Answer
<div>
<form>
<table class="d-flex justify-content-center">
    <tr class="text-center bg-success">
        <td style="width:200px;">Voc</td>
        <td style="width:200px">Meaning</td>
    </tr>
    <tr style="background:#52f176d6; height:100px;" class="text-center ">
        <td><input disabled type="text" name="vocab" style="width:50%;" value="<?=$inputanswer?>"><br><span style="color:red"><?="ans: ".$answer?></span></td>
        <td><div><?=$meaning?></div></td>
    </tr>
    <tr style="background:#52f176d6">
        <td colspan="2" class="text-center text-danger py-3"></td>
    </tr>
    <tr style="background:#52f176d6">
        <td colspan="2" class="text-center"><?=$result?></td>
    </tr>
</table>
</form>
</div>

