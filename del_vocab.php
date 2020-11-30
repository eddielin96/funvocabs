<?php
include_once('header.php');
?>
    <?php
        // if(isset($_GET['content'])){
        //     $page=$_GET['content'].".php";
        //     include $page;
        
        // }else{
        //     include "vocabs_list.php";
        // }
      
        if(isset($_GET['id'])){
            include_once "base.php";
            $sql = "SELECT `voc`,`type`,`meaning`,`sentence`,`note` FROM `vocabs` WHERE id='{$_GET['id']}'";
            $info = $pdo->query($sql)->fetch();
            // print_r($info);
            $id="{$_GET['id']}";
        }
    ?>
    
<body>
<div class="d-flex justify-content-center mt-5 mb-2"><a href="main.php"><div class="text-3d" >FunVocabs</div></a></div>

<div class="container col-12 ">


    <div class="col-12">

    <h1 class="pl-3 py-2 text-danger">Delete your vocab</h1>
<form action="" method="post">
<!-- 這裡的表單不會執行"沒有submit"，因為只是讓使用者確認原本的資料，且input元素皆使用disabled，皆無法傳直。 -->
<div class="col-12 d-flex flex-wrap">

    <div class="col-12 col-md-4 d-flex flex-column pr-5">

        <div class="my-3 my-md-auto font-weight-bold">Vocab：<input disabled type="text" name="vocab" placeholder="edit your vocab" value="<?=$info['voc'];?>"></div>
        <div class="my-3 my-md-auto font-weight-bold">Type：
            <select name="type"  disabled> 
<!-- 不知道怎麼讓傳值回來的 info['type'] -->

                <option value="1"  <?php if ($info['type']==1){echo "selected";}?>>vocab</option>
                <option value="2"  <?php if ($info['type']==2){echo "selected";}?>>phrase</option>
                <option value="3"  <?php if ($info['type']==3){echo "selected";}?>>idiom</option>
            </select>
        </div>

        <div   class="my-3 my-md-auto font-weight-bold">Meaning：<input disabled type="text" name="meaning" placeholder="eidt the definition of the word" value="<?=$info['meaning'];?>"></div>
        <div class="my-3 my-md-auto font-weight-bold">Sentence：<textarea  disabled style="width:100%; height:100px;" name="sentence" placeholder="edit your sentence" ><?=$info['sentence']?></textarea></div>
    </div>

    <div class="bg-primary pb-3 col-md-8 col-12 font-weight-bold">
        <div>Note：<textarea  disabled style="width:100%; height:400px;" name="note" placeholder="enter your text here"><?=$info['note'];?></textarea></div>
    </div>

    <div class=" d-flex col-12 mt-md-3 justify-content-center">
        <button class="mx-2 bg-danger" style="width:100px" type="submit" ><a href="api/delete_vocabs.php?id=<?=$id;?>">delete</a></button>
        <button class="mx-2 bg-warning" style="width:100px" type="submit" ><a href="main.php">cancel</a></button>
    </div>
    <div class="text-center text-danger col-12">Warning: you will delelte this word once you click the "delete" button</div>
</div>

</form>

    
    </div>

</div>

<?php
include_once('footer.php');
?>