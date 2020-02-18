<?php

include("functions.php");

// ดึงข้อมูล
//$cit_id = $_GET['cit_id'];
$cit_id = "1490400003052";
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

?>

    <!-- Header section  -->
<?php include("header.php") ?>

    <!-- Main section  -->
    <div class="container">
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
                </div              
    </div>
  

    <!-- Footer section  -->
<?php include("footer.php") ?>