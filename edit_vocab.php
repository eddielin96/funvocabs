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
<div class="d-flex justify-content-center mt-5 mb-2"><a href="index.php"><div class="text-3d" >FunVocabs</div></a></div>

<div class="container col-12 ">


    <div class="col-12">

    <h1 class="pl-3 py-2">Edit your word</h1>
<form action="api/update_vocabs.php" method="post">
<div class="col-12 d-flex flex-wrap">

    <div class="col-12 col-md-4 d-flex flex-column pr-5">

        <div class="my-3 my-md-auto font-weight-bold">Vocab：<input type="text" name="vocab" placeholder="edit your vocab" value="<?=$info['voc'];?>"></div>
        <div class="my-3 my-md-auto font-weight-bold">Type：
            <select name="type"> 
<!-- 不知道怎麼讓傳值回來的 info['type'] -->

                <option value="vocab"  <?php if ($info['type']=="vocab"){echo "selected";}?>>vocab</option>
                <option value="phrase"  <?php if ($info['type']=="phrase"){echo "selected";}?>>phrase</option>
                <option value="idiom"  <?php if ($info['type']=="idiom"){echo "selected";}?>>idiom</option>
            </select>
        </div>

        <div class="my-3 my-md-auto font-weight-bold">Meaning：<input type="text" name="meaning" placeholder="eidt the definition of the word" value="<?=$info['meaning'];?>"></div>
        <div class="my-3 my-md-auto font-weight-bold">Sentence：<textarea style="width:100%; height:100px;" name="sentence" placeholder="edit your sentence" ><?=$info['sentence']?></textarea></div>
    </div>

    <div class="bg-primary pb-3 col-md-8 col-12 font-weight-bold">
        <div>Note：<textarea style="width:100%; height:400px;" name="note" placeholder="enter your text here"><?=$info['note'];?></textarea></div>
    </div>

    <div class=" d-flex col-12 my-3 my-md-5 justify-content-center">
        <input class="mx-2" style="width:100px" type="submit" value="submit">
        <input class="mx-2" style="width:100px" type="reset" value="reset">
        <div><input class="d-none" name='id' value="<?=$id?>"></div>
    </div>
   
</div>
</form>

    
    </div>

</div>

<?php
include_once('footer.php');
?>
