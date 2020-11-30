<?php
include_once('header.php');
?>

<body>
<div class="d-flex justify-content-center mt-5 mb-2"><a href="main.php"><div class="text-3d">FunVocabs</div></a></div>

<div class="container col-12 ">

    <ul class="mb-3 p-0 d-inline-block d-flex flex-row col-12 justify-content-center">
        <li class="tabstyle col-3 "><a href="?content=vocabs_list">Vocabs List</a></li>
        <li class="tabstyle col-3 "><a href="?content=add_new_words">Add new words</a></li>
        <li class="tabstyle col-3 "><a href="?content=search">Search</a></li>
        <li class="tabstyle col-3 "><a href="?content=quiz">Quiz</a></li>
    </ul>


    <div class="col-12">
    <?php
        if(isset($_GET['content'])){
            $page=$_GET['content'].".php";
            include $page;
        
        }else{
            include "vocabs_list.php";
        }
    
    ?>
    
    
    </div>

</div>

<?php
include_once('footer.php');
?>
