
<?php
include("functions.php");
?>

    <!-- Header section  -->
<?php include("header.php") ?>
    <!-- Main section  -->
    <div class="container">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <thead>
    <tr class="table-primary">
      <th class="text-center" scope="col" width="30">#</th>
      <th class="text-left" scope="col">ชื่อ-สกุล(ภาษาไทย)</th>
      <th class="text-left" scope="col">ประเภท</th>
      <th class="text-left" scope="col">รุ่นอายุ</th>
      <th class="text-left" scope="col"></th>
      <th class="text-left" scope="col">สถานะการชำระเงิน</th>
     
    </tr>
  </thead>
  <tbody>
<?php
$num = 0;
$sql = " select   * from v_register order by payment_status";

$result = $mysqli->query($sql);
if ($result && $result->num_rows > 0) { // คิวรี่ข้อมูลสำเร็จหรือไม่ และมีรายการข้อมูลหรือไม่
    while ($row = $result->fetch_assoc()) { // วนลูปแสดงรายการ
        $num++;
        ?>


    <tr>
      <th class="text-center" scope="row"><?//=($step_num * $e_page) + $num?></th>
      <td class="text-left" ><?=$row['full_name']?></td>
      <td class="text-left" > <?=$row['run_type_name']?></td>
      <td class="text-left" > <?=$row['mode_regis_name']?></td>
      <td class="text-left" > <a href="register_edit.php?cit_id=<?=$row['cit_id']?>" class="btn btn-primary">รายละเอียด/แก้ไข</a></td>
      
      <td class="text-left" > 
      <a href="form_upload_admin.php?cit_id=<?=$row['cit_id']?>" class="btn btn-<?=fn_class_flag_status($row['payment_status'])?>"><?=status_pay($row['payment_status'])?></a>
      </td>
   

    </tr> 
<?php
}
}
?>
  </tbody>
</table>
    </div>
 

    <script src="media/js/jquery.js" type="text/javascript"></script>
  <script src="media/js/jquery.dataTables.js" type="text/javascript"></script>

  <title></title>
	<script>
		
$(document).ready(function() {
    $('#dataTable').DataTable();
} );
 
	</script>
    <!-- Footer section  -->
<?php //include("footer.php") ?>