<?php

include("functions.php");
require_once("pagination_function.php");
// PHP goes here!

?>

    <!-- Header section  -->
<?php include("header.php") ?>

    <!-- Main section  -->
    <div class="container">
    <form name="form1" method="get" action="">
<div class="form-group row">
    <label for="keyword" class="col-sm-4 col-form-label text-right">
    ระบุคำค้นจาก ชื่อ นามสกุล หรือเลขประจำตัวประชาชน
    </label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="keyword" id="keyword" 
       value="<?=(isset($_GET['keyword']))?$_GET['keyword']:""?>">
    </div>
</div>    
   

<div class="form-group row">
    <div class="col-sm-4 offset-sm-4">
      <button type="submit" class="btn btn-primary" name="btn_search" id="btn_search">ค้นหา</button>
      &nbsp;&nbsp;
      <a href="member_list.php" class="btn btn-danger">ล้างค่า</a>
    </div>
</div>
</form>
 
<div class="table-responsive-sm">
<table class="table table-bordered table-striped table-hover table-sm">
  <thead >
    <tr class="table-primary">
      <th class="text-center" scope="col" width="30">#</th>
      <th class="text-left" scope="col">ชื่อ-สกุล</th>
      <th class="text-left" scope="col">ประเภท</th>
      <th class="text-left" scope="col">รุ่น</th>
      <th class="text-left" scope="col"></th>
      <th class="text-left" scope="col">สถานะ</th>
    </tr>
  </thead>
  <tbody>
<?php
$num = 0;
$sql = "
SELECT * FROM v_register where 1
";  
 

 
// เงื่อนไขสำหรับ input text
if(isset($_GET['keyword']) && $_GET['keyword']!=""){
    // ต่อคำสั่ง sql 
    $sql.=" AND fname LIKE '%".trim($_GET['keyword'])."%' ";    
    $sql.=" OR lname LIKE '%".trim($_GET['keyword'])."%' ";   
    $sql.=" OR cit_id LIKE '%".trim($_GET['keyword'])."%' "; 
}

// if(isset($_GET['keyword']) && $_GET['keyword']!=""){
//   // ต่อคำสั่ง sql 
//   $sql.=" AND lname LIKE '%".trim($_GET['keyword'])."%' ";    
// }
 

 

//////////////////// MORE QUERY 
$result=$mysqli->query($sql);
@$total=$result->num_rows;
 
$e_page=10; // กำหนด จำนวนรายการที่แสดงในแต่ละหน้า   
$step_num=0;
if(!isset($_GET['page']) || (isset($_GET['page']) && $_GET['page']==1)){   
    $_GET['page']=1;   
    $step_num=0;
    $s_page = 0;    
}else{   
    $s_page = $_GET['page']-1;
    $step_num=$_GET['page']-1;  
    $s_page = $s_page*$e_page;
}   
$sql.=" ORDER BY payment_status  desc  LIMIT ".$s_page.",$e_page";
$result=$mysqli->query($sql);
if($result && $result->num_rows>0){  // คิวรี่ข้อมูลสำเร็จหรือไม่ และมีรายการข้อมูลหรือไม่
    while($row = $result->fetch_assoc()){ // วนลูปแสดงรายการ
        $num++;
?>
    <tr>
      <th class="text-center" scope="row"><?=($step_num*$e_page)+$num?></th>
      <td class="text-left" ><?=$row['prefix_name_th']?><?=$row['fname']?>  <?=$row['lname']?></td>
      <td class="text-left" ><?=$row['run_type_name']?></td>
      <td class="text-left" ><?=$row['mode_regis_name']?></td>
      <td class="text-left" > <a href="authen.php?id=<?=$row['id']?>" class="btn btn-primary">รายละเอียด/แก้ไข</a></td>
      <!-- <td class="text-left" > <a href="authen_upload.php?id=<?=$row['id']?>" class="btn btn-success">แจ้งชำระเงิน</a></td> -->
      <td class="text-left" > <a href="authen_upload.php?id=<?=$row['id']?>" class="btn btn-<?=fn_class_flag_status($row['payment_status'])?>"><?=status_pay($row['payment_status'])?></a></td>
    </tr>
<?php
    }   
}
?>      
  </tbody>
</table>
 
<?php
page_navi($total,(isset($_GET['page']))?$_GET['page']:1,$e_page,$_GET);
?>
</div>
 
<br>
 
<br>
    </div>

    <!-- Footer section  -->
<?php include("footer.php") ?>