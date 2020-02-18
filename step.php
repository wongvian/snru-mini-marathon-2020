<?php

include("functions.php");

// PHP goes here!

?>
  <p>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/site.min.css">
    <!-- Header section  -->
<?php 

include("header.php") ;

$sql_bank = "select   * from bank_list";
$result = $mysqli->query($sql_bank);
$row_bank = $result->fetch_assoc();
if ($row_bank) {

    $bank_name = $row_bank['bank_name'];
    $bank_account_name = $row_bank['bank_account_name'];
    $bank_acc= $row_bank['bank_acc'];
}
?>
    <!-- Main section  -->
    <div class="container">
  
    <!--TimeLine
      ================================================== -->
      <div class="example">
		<h2 class="example-title"></h2>
        <div class="row">
		  <div class="col-md-12">
			  <div class="timeline">
				  <dl>
					  <dt>Start</dt>
					  <dd class="pos-right clearfix">
						  <div class="circ"></div>
						  <div class="time">10 พ.ย. 2562 - 10 ม.ค. 2563</div>
						  <div class="events">
							  <div class="pull-left">
								  <img class="events-object img-rounded" src="img/register.png">
							  </div>
							  <div class="events-body">
								  <h5> <class="events-heading"><a href="register.php">กรอกใบสมัครออนไลน์</a></h4>
								  <p>มหาวิทยาลัยราชภัฏสกลนคร ร่วมกับสมาคมศิษย์เก่า ขอเชิญร่วมเดิน-วิ่ง เนื่องในโอกาสครบรอบ 55 ปี
								  <h4 class="events-heading"><i>"ราชภัฏสกลนคร มินิมาราธอน"</i></h4>
								เดิน-วิ่ง ในวันอาทิตย์ที่ 9 กุมภาพันธ์ 2563 START/FINISH มหาวิทยาลัยราชภัฏสกลนคร
								</p>
							  </div>
						  </div>
					  </dd>
					  <dd class="pos-left clearfix">
						  <div class="circ"></div>
						  <div class="time"></div>
						  <div class="events">
							  <!-- <div class="pull-left">
								  <img class="events-object img-rounded" src="img/payment.png">
							  </div> -->
							  <!-- <div class="events-body">
								  <h4 class="events-heading">ชำระเงินค่าสมัคร ผ่าน Mobile Banking หรือ Internet Banking</h4>
								 
        โอนเงินค่าสมัครเข้าบัญชี:<?//=$bank_name?>
        ชื่อบัญชี:<?//=$bank_account_name?>
        เลขที่บัญชี:<?//=$bank_acc?></p>
								  <p>ชำระเงินเสร็จแล้ว ให้อัพโหลดหลักฐานการชำระเงิน ที่เมนู แจ้งชำระเงิน</p>
							  </div> -->
						  </div>
					  </dd>
					  <!-- <dt>Mar 2014</dt> -->
					  <dd class="pos-right clearfix">
						  <div class="circ"></div>
						  <div class="time"></div>
						  <div class="events">
							  <div class="pull-left">
								  <img class="events-object img-rounded" src="img/upload.jpg">
							  </div>
							  <div class="events-body">
								  <h4 class="events-heading"><a href="authen_upload.php">แจ้งชำระเงิน ค่าสมัครผ่านเมนู แจ้งชำระเงิน</a></h4>
								  <p></p>
							  </div>
						  </div>
					  </dd>
					  <dd class="pos-left clearfix">
						  <div class="circ"></div>
						  <div class="time"></div>
						  <div class="events">
							  <div class="pull-left">
								  <img class="events-object img-rounded" src="img/audit.jpg">
							  </div>
							  <div class="events-body">
								  <h4 class="events-heading">รอผู้ดูแลระบบตรวจสอบการชำระเงินและปรับปรุงสถานะ</h4>
								  <p></p>
							  </div>
						  </div>
					  </dd>
					  <dd class="pos-right clearfix">
						  <div class="circ"></div>
						  <div class="time"></div>
						  <div class="events">
							  <div class="pull-left">
								  <img class="events-object img-rounded" src="img/shirt.jpg">
							  </div>
							  <div class="events-body">
								  <h3 class="events-heading">กำหนดวันรับ เสื้อ-เบอร์วิ่ง </h3>
								  <p>การรับเสื้อ-เบอร์วิ่ง ให้มารับ ในวันที่ 8 กุมภาพันธ์ 2563 เวลา 10.00 น.-16.30 น. ณ โถ่งล่าง หอประชุมมหาวชิราลงกรณ ม.ราชภัฏสกลนคร 
หลักฐานการรับของ ผู้สมัครโปรดแสดงหน้าแจ้งชำระเงิน ที่มีสถานะการชำระเงินที่สมบูรณ์ บนเว็บไซต์ลงทะเบียน (ในมือถือ)พร้อมแสดงบัตรประจำตัวประชาชน ไปแสดงต่อเจ้าหน้าที่ (ไปรับแทนคนอื่น ต้องแสดงบัตรประชาชนของตนต่อเจ้าหน้าที่)</p>
							  </div>
						  </div>
					  </dd>

				  </dl>
			  </div>
		  </div>
		</div>
      </div>

    <!-- Footer section  -->
<?php include("footer.php") ?>