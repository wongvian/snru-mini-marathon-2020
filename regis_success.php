<?php

include("functions.php");

// ดึงข้อมูล
$cit_id = @$_GET['cit_id'];
//$cit_id = "1490400003052";
$sql_check = "select   * from v_register where cit_id='$cit_id'";
$result = $mysqli->query($sql_check);
$row = $result->fetch_assoc();
if ($row) {
    $full_name = $row['prefix_name_th'] . $row['fname'] . '  ' . $row['lname'];
    $run_type_name = $row['run_type_name'];
    $mode_regis_name = $row['mode_regis_name'];
    $shirt_size_name = $row['shirt_size_name'];
    $date_regis = thai_date1($row['date_regis']);
    $pay_status = $row['payment_status'];
    $slip_acc = $row['slip_acc'];
    $pay_amount = $row['pay_amount'];
    $pay_date = $row['pay_date'];
    $pay_time = $row['pay_time'];
    $file_payment = $row['file_payment'];
    $type_run = $row['type_run'];
    $total=0;
    if($type_run=="1"){
      $total ="350";
    }else if($type_run=="2"){
      $total ="450";
    }else if($type_run=="3"){
      $total ="1,000";
    }else{
      $total ="NA";
    }
}

// รายละเอียดธนาคารสำหรับชำระเงินค่าสมัคร
$sql_bank = "select   * from bank_list";
$result = $mysqli->query($sql_bank);
$row_bank = $result->fetch_assoc();
if ($row_bank) {

    $bank_name = $row_bank['bank_name'];
    $bank_account_name = $row_bank['bank_account_name'];
    $bank_acc= $row_bank['bank_acc'];
}


?>

<!-- Header section  -->
<?php include("header.php") ?>

<!-- Main section  -->



<!-- <div class="jumbotron jumbotron-fluid"> -->
    <div class="container">
    <div class="row">
  <div class="col-md-12">
    <div class="thumbnail">
      <div class="caption">
        
      <h1>สมัครสำเร็จแล้ว รอแจ้งชำระเงิน</h1>
        <div>ชื่อ-สกุล:<?=$full_name?></div>
        <div>ประเภท:<?=$run_type_name?></div>
        <div><?=$mode_regis_name?></div>
        ผู้สมัครจะต้องชำระเงินค่าสมัคร
        <div>ยอดเงินที่ต้องชำระ: <?=$total?> บาท</div>
        <h3>วิธีการชำระเงิน</h3>
        <div>โอนเงินค่าสมัครเข้าบัญชี:<?=$bank_name?></div>
        <div>ชื่อบัญชี:<?=$bank_account_name?></div>
        <div>เลขที่บัญชี:<?=$bank_acc?></div>
        <h3>เมื่อชำระเงินสมบูรณ์แล้ว</h3>
        ให้ผู้สมัครแจ้งชำระเงินที่ เมนู <a href="authen_upload.php" class="btn btn-info" role="button">แจ้งชำระเงิน</a>

      </div>
    </div>
  </div>
</div>


        
  


        
    </div>
</div>
</div>

<!-- Footer section  -->
<?php include("footer.php") ?>