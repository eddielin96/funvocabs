<?php
include_once('header.php');
?>

<div class="register_container">
    <div class="d-flex flex-column justify-content-center align-items-center" style="height:90vh">
        <h5 class="font-weight-light my-3">Create Your Account</h5>
        <form class= "px-5 py-2" action="add_user.php" method="post" style="border-radius:10%; box-shadow:15px 10px 20px #4682B4">
            <div><p>Account</p><input  class="mb-3"type="text" name="acc" style="width:80%;" ></div>
            <div><p>Password</p><input class="mb-3" type="password" name="pw" style="width:80%;"></div>
            <div><p>Email</p><input class="mb-3" type="email" name="email" style="width:80%;"></div>
            <div><p>Birthday</p><input  class="mb-3"type="date" name="birthday"style="width:80%;" ></div>
            <div class="my-3 d-flex justify-content-center"><input class="mb-3 py-2 font-italic" type="submit" value="Register" style="width:100%;"></div>
        </form>
    </div>
</div>






<?php
include_once('footer.php');
?>