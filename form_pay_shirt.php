<?php

include "functions.php";

// PHP goes here!

?>

<!-- Header section  -->
<?php 
include "header.php";
include "src/BarcodeGenerator.php";
include "src/BarcodeGeneratorHTML.php";

// ดึงข้อมูล
//$cit_id = $_GET['cit_id'];
@$cit_id = $_POST['cit_id'];
$sql_check = "select   * from v_register where cit_id='$cit_id'";
$result = $mysqli->query($sql_check);
$row = $result->fetch_assoc();
if ($row) {
    @$full_name = $row['prefix_name_th'] . $row['fname'] . '  ' . $row['lname'];
    @$run_type_name = $row['run_type_name'];
    @$mode_regis_name = $row['mode_regis_name'];
    @$shirt_size_name = $row['shirt_size_name'];
    @$date_regis = thai_date1(@$row['date_regis']);
    @$pay_status = $row['payment_status'];
    @$slip_acc = $row['slip_acc'];
    @$pay_amount = $row['pay_amount'];
    @$pay_date = $row['pay_date'];
    @$pay_time = $row['pay_time'];
    @$file_payment = $row['file_payment'];

    @$type_run = $row['type_run'];
    $total=0;
    if(@$type_run=="1"){
      $total ="350";
    }else if(@$type_run=="2"){
      $total ="450";
    }else if(@$type_run=="3"){
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

$code = $cit_id;//รหัส Barcode ที่ต้องการสร้าง
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
$border = 2;//กำหนดความหน้าของเส้น Barcode
$height = 50;//กำหนดความสูงของ Barcode

?>

<!-- Main section  -->
<div class="container">
    <div class="container">
    <div class="card-header">
                            <h2>บันทึกข้อมูลส่งมอบเสื้อ</h2>
    </div>
        <div class="row">
            <div class="col-md-12 col-md-offset-3">
                <div class="container">
                    <div align="center"></div>

                    <div class="card card-login mx-auto col-md-6">
                    <form action="form_pay_shirt.php" method="post">

                    <div class="form-group">
                                    <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="เลขประจำตัวประชาชน" name="cit_id">
                      <br>
                                <button type="submit" class="btn btn-primary col-md-6">ตรวจสอบ</button>

        </div>
</dv>
                    </form>
                            </div>
                <div>
                    <div class="card card-login mx-auto mt-5">
                 <br>
                        <h4 class="<?=fn_class_flag(@$status_pay)?>">สถานะปัจจุบัน:<?=status_pay(@$pay_status)?></h4>
                        <div class="card-body">
                            <form id="login-form" action="process.php?cmd=cf_slip" method="post"
                                enctype="multipart/form-data" role="form">
                                <div class="form-group">
                                    <div class="form-label-group">
                                   
                                        ชื่อ-สกุล:<?=@$full_name?><br>
                                        เลขที่บัตรประจำตัวประชาชน: <?=@$cit_id?> <br>
                                        สมัครวันที่: <?=@$date_regis?> <br>
                                        สมัครเภท: <?=@$run_type_name?> <br>
                                        <?=@$mode_regis_name?> <br>
                                        ยอดเงินที่ต้องชำระ <?=@$total?> บาท<br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-label-group">
                                        ใส่เลขบัญชี 4 หลักสุดท้าย จากบัญชีที่ใช้โอน:
                                        <?=@$slip_acc?> <br>
                                        ยอดเงินที่โอน <?=@$pay_amount?> บาท<br>
                                        วันที่ชำระ: <?=@$pay_date?> <br>
                                        เวลาที่โอนเงิน: <?=@$pay_time?> <br>

                                    </div>
                                </div>

                                <input type="hidden" id="hcitid" name="hcitid" value="<?=@$cit_id?>">


                                <div class="col-md-3 text-center"> 
                                    <?php
                                    if(@$pay_status=="2"){
                                        ?>
                                    <button type="submit"
                                        class='btn btn-success btn-lg'>&nbsp;&nbsp;
                                        มารับรับเสื้อเรียบร้อย &nbsp;&nbsp;</button>
                                    <?php
                                    }
                                    ?>


                                    <div>
                                        <div class="col-md-3 text-center"> <a
                                                href="process.php?cmd=re_slip&cit_id=<?=$cit_id?> "
                                                class="btn btn-danger btn-lg">รอนำจ่ายเสื้อ</a>
                                        <div>
                                    </div>
                                </div>
                                </div>
                            </form>
                            <br>
                       
                            <div><a href="slip/<?=$file_payment?>">
                                    <image width="300" src="slip/<?=$file_payment?>"></image>
                                </a></div>


                        </div>
                        <!-- /.container-fluid -->

                        <!-- Sticky Footer -->


                    </div>
                    <!-- /.content-wrapper -->

                </div>
            </div>

            <!-- Footer section  -->
            <?php //include "footer.php"?>