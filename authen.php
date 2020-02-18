<?php

include("functions.php");

// PHP goes here!

?>

    <!-- Header section  -->
<?php include("header.php") ?>

    <!-- Main section  -->
    <div class="container">
    <form id="login-form" action="process.php?cmd=chk_access_update" method="post"   role="form" >
    ระบุเลขประจำตัวประชาชน
      <input type="text" id="txt_cit_id" class="fadeIn second" name="txt_cit_id" placeholder="ระบุเลขประจำตัวประชาชน">
      <input type="hidden" id="hid" name="hid" value="<?=@$_GET["id"]?>"> 
      <input type="submit" class="fadeIn fourth" value="ตกลง">
    </form>
    </div>

    <!-- Footer section  -->
<?php include("footer.php") ?>