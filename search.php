<?php
include_once "base.php";



?>

<form action="index.php" method="get">
<input type="text" name="result">
<input type="submit" value="search">
</form>

<?php
if (isset($_GET['result'])){ // 如果有收到該變數的話呢就按照該以下方式排列
        $result= $_GET['result'];
        $sql="SELECT `id`,`voc`,`type`,`meaning`,`sentence` FROM `vocabs` WHERE voc LIKE '%$result%'";
        $vocabs_list=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        if (empty($vocabs_list)||$result==""){
            echo "<span style='font-weight:bold; font-size:1.2rem'>Your search - <span style='color:#ca1212; text-decoration:underline;'>$result</span> - did not match any vocabs</span>";
        }else{
        // $pdo->exec($sql); 這個是叫資料庫執行這個動作
        // echo count($vocabs_list); 印出資料庫有多少筆資料
        // $voc = "";
        // $type = "";
        // $meaning = "";
        // $sentence= "";

        // foreach ($vocabs_list as $list){ <- 因為裡面有13筆資料所以會印出13筆陣列
        //     print_r($list);
        // }

        echo "<table class='col-12' style='border:1px #eee solid'>";
            
        echo "<tr  style='background:lightgreen; font-size:20px; font-weight:bold;'>";
            
        echo "<td class='text-center '>";
        echo "Vocabs";
        echo "</td>";
            
        echo "<td class='text-center'>";
        echo "Type";
        echo "</td>";
            
        echo "<td class='text-center '>";
        echo "Meaning";
        echo "</td>";
            
        echo "<td class=' text-center '>";
        echo "Sentence";
        echo "</td>";
            
        echo "<td class='text-center'>";
        echo "Note";
        echo "</td>";
            
        echo "</tr>";
            
        // for($i=1; $i<=$number; $i++){problem1  原本想讓每個單子後面配個按鈕 每個按鈕都有相應ID對應其句子 當點擊按鈕會跳出下方句子列，失敗先暫時放棄
        //     $c="a".$i; 

        foreach($vocabs_list as $list){
        echo "<tr style='border:1px solid #eee'>";
    
        echo "<td class='text-center '>";
        print_r($list['voc']);
        echo "</td>";
    
        echo "<td class='text-center '>";
        print_r($list['type']);
        echo "</td>";
    
        echo "<td class='text-center '>";
        print_r($list['meaning']);
        echo "</td>";
    
        echo "<td >";
        print_r($list['sentence']);
        echo "</td>";
    
    
        // echo "<td>"; problem1 
        // echo "<button></button>";
        // echo "</td>";
    
        $id = $list['id'];
    
        echo "<td class='text-center flex-lg-row align-items-center'>";
        echo "<a href='edit_vocab.php?id=$id&content=add_new_words'><button class='m-1 bg-warning rounded'>edit</button></a>";
        echo "<a href='del_vocab.php?id=$id&content=add_new_words'><button class='m-1 bg-danger'>delete</button></a>";
        echo "</td>";
    
        echo "</tr>";
    
        /*echo "<tr>"; problem1 
        echo "<td colspan='6'>";
        print_r($list['note']);
        echo "</td>";
        echo "</tr>";*/
        }

        echo "</table>";
        }
    }else{ 

}

?>

