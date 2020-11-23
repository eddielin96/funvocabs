<?php
include_once('header.php');
?>

<body>
<div class="container col-10">
<div class="d-flex flex-column justify-content-center align-items-center" style="height:90vh">
    <div class="text-3d" >FunVocabs</div>
    <form action="check.php" method="post">
    <h5 class="text-center text-white" >Sign in</h5>
        <div class="my-3">
            <p><input type="text" name="acc" required placeholder="Username" style="width:100%" minlength="6" maxlength="10"></p>
            <p  class="mb-4"></p>
        </div>
        <div class="my-3">
            <p><input type="password" name="pw" required placeholder="Password " style="width:100%" minlength="6" maxlength="12"></p>
            <p class="mb-4"></p>
        </div>
        <div>
            <a href="forget_pw.php">Forget password?</a>
            <a href="register.php">Create an account</a>
        </div>
        <div class="mt-3">
            <input class="font-weight-normal" type="submit" value="SIGN IN" style="width:100%; border:none; background:#e1e1ea">
        </div>
    </form>
</div>
</div>

<?php
include_once('footer.php');
?>
