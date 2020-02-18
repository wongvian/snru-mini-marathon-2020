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
$cit_id = $_GET['cit_id'];
$sql_check = "select   * from v_register where cit_id='$cit_id'";
$result = $mysqli->query($sql_check);
$row = $result->fetch_assoc();
if ($row) {
    $full_name = $row['prefix_name_th'] . $row['fname'] . '  ' . $row['lname'];
    $run_type_name = $row['run_type_name'];
    $mode_regis_name = $row['mode_regis_name'];
    $shirt_size_name = $row['shirt_size_name'];
    $date_regis = thai_date1(@$row['date_regis']);
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


 
$code = $cit_id;//รหัส Barcode ที่ต้องการสร้าง
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
$border = 2;//กำหนดความหน้าของเส้น Barcode
$height = 50;//กำหนดความสูงของ Barcode
 



?>

<!-- Main section  -->
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-3">
                <div class="container">
                    <div align="center"></div>

                    <div class="card card-login mx-auto mt-5">
                        <div class="card-header">
                            <h3>Upload หลักฐานการชำระเงิน</h2>
                        </div>

                        <h4 class="<?=fn_class_flag($status_pay)?>">สถานะปัจจุบัน:<?=status_pay($pay_status)?></h4>
                        <div class="card-body">
                            <form id="login-form" action="process.php?cmd=upload_slip" method="post"
                                enctype="multipart/form-data" role="form">

                                <div class="form-group">
                                    <div class="form-label-group">
                                        <?php echo $generator->getBarcode($code , $generator::TYPE_CODE_128,$border,$height);?><br>
                                        ชื่อ-สกุล:<?=$full_name?><br>
                                        เลขที่บัตรประจำตัวประชาชน: <?=$cit_id?> <br>
                                        สมัครวันที่: <?=$date_regis?> <br>
                                        สมัครเภท: <?=$run_type_name?> <br>
                                        ขนาดเสื้อที่เลือก: <?=$shirt_size_name?> <br>
                                        <?=$mode_regis_name?> <br>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-label-group">

                                        ยอดเงินที่ต้องชำระ <?=$total?> บาท<br>
                                        โอนเงินค่าสมัครเข้าบัญชี: <?=$bank_name?> <br>
                                        ชื่อบัญชี: <?=$bank_account_name?> <br>
                                        เลขที่บัญชี: <?=$bank_acc?> <br>


                                    </div>
                                </div>
                                <?php
if ($pay_status != "2") {
    ?>

                                <div class="form-group">

                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <h4> ใส่เลขบัญชี 4 หลักสุดท้าย(จากบัญชีที่ใช้โอน เพื่อตรวจสอบความถูกต้อง)::</h1>
                                                <input required type="text" name="slip_acc" value="<?=$slip_acc?>"
                                                    id="slip_acc">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <h4>ยอดเงินที่ชำระ:</h1>
                                                <input required type="text" name="pay_amount" value="<?=$pay_amount?>"
                                                    id="pay_amount">
                                        </div>
                                    </div>

                                    <div class="form-label-group">
                                        <h4>วันที่ชำระเงิน</h1>
                                            <input class="input" name="pay_date" value="<?=$pay_date?>" type="text"
                                                data-provide="datepicker" data-date-format="dd/mm/yyyy">
                                            <!--<input type="date"  name="pay_date" class="form-control" required placeholder="วัน" />-->
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="form-label-group">
                                        <h4>เวลาที่ชำระเงินตามที่ปรากฏในสลิป</h4>
                                        <input name="pay_time" class="form-control" value="<?=$pay_time?>" required
                                            placeholder="เวลา" />
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="form-label-group">
                                        <h4>แนบไฟล์หลักฐานการชำระเงิน</h1>
                                            <input required type="file" name="fileslip" id="fileslip">

                                    </div>
                                </div>


                                <input type="hidden" id="hcitid" name="hcitid" value="<?=$cit_id?>">

                                <div  class="col-md-3 text-center">
                                    <button disabled  type="submit" class='btn btn-primary btn-lg'>&nbsp;&nbsp;<i
                                            class="fa fa-save"></i>
                                        บันทึก &nbsp;&nbsp;</button>
                                    <a  href="index.php" class="btn btn-danger btn-lg">ยกเลิก</a>
                                </div>
                            </form>
                            <br>
                            <br>
                            <br>
                            <?php 
                            if($file_payment!=""){
                            ?>
                            <div>
                                <a href="slip/<?=$file_payment?>">
                                    <image width="300" src="slip/<?=$file_payment?>">
                                    </image>
                                </a>
                            </div>

                            <?php
                            }
                            ?>


                            <?php } else if ($pay_status == "2") {?>
                            <div class="col-md-8">
                                <div class="pricing">
                                    <ul>
                                        <li class="unit price-<?=fn_class_flag_status($pay_status)?>">
                                            <div class="price-title">
                                                <h4><?=$run_type_name?></h4>

                                            </div>
                                            <div class="price-body">
                                                <h3><?=$full_name?></h3>
                                                <p></p>
                                                <ul>
                                                    <li>สถานะ:<?=status_pay($pay_status)?></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                            <div class="price-foot">
                                            </div>
                                        </li>
                                </div>
                            </div>
                            <a href="slip/<?=$file_payment?>">
                                <image src="slip/<?=$file_payment?>"></image>
                            </a>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>



        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->


    </div>
    <!-- /.content-wrapper -->

</div>
</div>

<!-- Footer section  -->
<?php include "footer.php"?>