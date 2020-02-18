<?php

include "functions.php";

// PHP goes here!

?>

<!-- Header section  -->
<?php include "header.php"?>

<?php
// เรียกข้อมูลเพื่อแก้ไข
$cit_id = $_GET['cit_id'];

$sql_check = "select   * from register where cit_id='$cit_id'";
//echo $sql_check;
$result = $mysqli->query($sql_check);
$row = $result->fetch_assoc();
if ($row) {
  $run_type_id= $row['type_run'];
  $mode_regis =$row['mode_regis'];
  $prefix_id =$row['prefix_id'];
  $fname =$row['fname'];
  $blood_group = $row['blood_group'];
  $gender = $row['gender_id'];
  
  $fname = $row['fname'];
  $lname = $row['lname'];
  $cit_id = $row['cit_id'];
  $bdate = $row['bdate'];
  $blood_group = $row['blood_group'];
  $weight = $row['weight'];
  $hight = $row['hight'];
  $congenital = $row['congenital'];
  $addr = $row['addr'];
  $tambol = $row['tambol'];
  $amphur = $row['amphur'];
  $province = $row['province'];
  $zipcode = $row['zipcode'];

  $phone = $row['phone'];
  $emergency_contact = $row['emergency_contact'];
  $mergency_phone = $row['mergency_phone'];
  $shirt_size = $row['shirt_size'];
  
}

?>

<!-- Main section  -->
<div class="container">
<div class="aler alert-info"></div>
    <h1>แบบฟอร์มแก้ไขข้อมูล สมัครออนไลน์</h1>
    <main role="main" class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-12">
                <form class='row' id='demo1' class="demo" action="process.php?cmd=update_data" method="post"
                    accept-charset='utf-8' enctype="multipart/form-data">

<br>

                    <fieldset disabled  class="form-group col-md-6">
                        <label for="type_run">ประเภทที่สมัคร(สงวนสิทธิ์การแก้ไข)</label>

                        <select  id='type_run' name='type_run' value="">
                            <option  value="">- เลือก ประเภทที่สมัคร-</option>
                            <?php
                                  $strDefault = $run_type_id;
                                  $strSQL = "SELECT * FROM ref_run_type";
                                  $objQuery = mysqli_query($conn, $strSQL);
                            while ($objResuut = mysqli_fetch_array($objQuery)) {
                                  if ($strDefault == $objResuut["run_type_id"]) {
                                  $sel = "selected";
                                  } else {
                                    $sel = "";
                              }
                            ?>
                            <option  value="<?php echo $objResuut["run_type_id"]; ?>" <?php echo $sel; ?>>
                            <?php echo $objResuut["run_type_name"]; ?></option>
                            <?php  }  ?>
                        </select  >

                    </fieldset>

                    <fieldset class="form-group col-md-6">
                        <label for="mode_id">รุ่นการรับสมัคร</label>

                        <select id='mode_id' name='mode_id' value="">
                            <option value="">- เลือก รุ่นการรับสมัคร -</option>
                            <?php
                                  $strDefault = $mode_regis;
                                  $strSQL = "SELECT * FROM ref_mode_regis";
                                  $objQuery = mysqli_query($conn, $strSQL);
                            while ($objResuut = mysqli_fetch_array($objQuery)) {
                                  if ($strDefault == $objResuut["mode_regis_id"]) {
                                  $sel = "selected";
                                  } else {
                                    $sel = "";
                              }
                            ?>
                            <option value="<?php echo $objResuut["mode_regis_id"]; ?>" <?php echo $sel; ?>>
                            <?php echo $objResuut["mode_regis_name"]; ?></option>
                            <?php  }  ?>
                        </select>
                    </fieldset>

                <fieldset class="form-group col-md-6">
                <label for="gender_id">เพศ</label><br>
                <div class="form-check form-check-inline">
                <?php if($gender=="1"){ ?>
                <input type="radio" name="gender_id"  value="1" checked="true"> ชาย<br>
                <input type="radio" name="gender_id" value="2" > หญิง<br>
               
                <?php }else{ ?>
                    <div class="form-check form-check-inline">
                <input type="radio" name="gender_id" value="1"> ชาย<br>
                <input type="radio" name="gender_id" value="2" checked="true"> หญิง<br>
              
                </div>                 
                <?php } ?>
                </fieldset>

                    <fieldset class="form-group col-md-6">
                        <label for="prefix_id">คำนำหน้า</label>

                        <select id='prefix_id' name='prefix_id' value="">
                            <option value="">- เลือก คำนำหน้า -</option>
                            <?php
                                  $strDefault = $prefix_id;
                                  $strSQL = "SELECT * FROM ref_prefix";
                                  $objQuery = mysqli_query($conn, $strSQL);
                            while ($objResuut = mysqli_fetch_array($objQuery)) {
                                  if ($strDefault == $objResuut["prefix_id"]) {
                                  $sel = "selected";
                                  } else {
                                    $sel = "";
                              }
                            ?>
                            <option value="<?php echo $objResuut["prefix_id"]; ?>" <?php echo $sel; ?>>
                            <?php echo $objResuut["prefix_name_th"]; ?></option>
                            <?php  }  ?>
                        </select>
                    </fieldset>      
                    <fieldset class="form-group col-md-6">
                        <label for="fname">ชื่อ</label>
                        <input type="text" placeholder="ชื่อ" class="form-control" value="<?=$fname?>" name="fname" id="fname"
                            placeholder="">
                    </fieldset>
                    <fieldset class="form-group col-md-6">
                        <label for="lname">สกุล</label>
                        <input type="text" placeholder="สกุล" class="form-control" value="<?=$lname?>" name="lname" id="lname"
                            placeholder="">
                    </fieldset>
                    <fieldset class="form-group col-md-6">
                        <label for="cit_id">เลขที่บัตรประชาชน / พาสปอร์ต </label>
                        <input type="text" placeholder="เลขที่บัตรประชาชน / พาสปอร์ต" disabled class="form-control" value="<?=$cit_id?>" name="cit_id" id="cit_id" placeholder="">
                        <input type="hidden" id="hcit" name="hcit" value="<?=$cit_id?>">
                    </fieldset>

                    <fieldset class="form-group col-md-6">
                        <label for="bdate">วัน เดือน ปี เกิด</label>
                        <input type="text" class="form-control" value="<?=$bdate?>" name="bdate" id="bdate" placeholder="">
                    </fieldset>
                    </fieldset>
                    <fieldset class="form-group col-md-6">
                        <label for="prefix_id">หมู่เลือด</label>
                        <select id='blood_group' name='blood_group' value="">
                            <option value="">- เลือก หมู่เลือด -</option>
                            <?php
                                  $strDefault = $blood_group;
                                  $strSQL = "SELECT * FROM ref_blood_group order by blood_group_name";
                                  $objQuery = mysqli_query($conn, $strSQL);
                            while ($objResuut = mysqli_fetch_array($objQuery)) {
                                  if ($strDefault == $objResuut["blood_group_id"]) {
                                  $sel = "selected";
                                  } else {
                                    $sel = "";
                              }
                            ?>
                            <option value="<?php echo $objResuut["blood_group_id"]; ?>" <?php echo $sel; ?>>
                            <?php echo $objResuut["blood_group_name"]; ?></option>
                            <?php  }  ?>
                        </select>
                    </fieldset>
                    <fieldset class="form-group col-md-6">
                        <label for="weight">น้ำหนัก</label>
                        <input type="text" placeholder="น้ำหนัก" class="form-control" value="<?=$weight?>" name="weight" id="weight"
                            placeholder="">
                    </fieldset>
                    <fieldset class="form-group col-md-6">
                        <label for="hight">ส่วนสูง</label>
                        <input type="text" placeholder="ส่วนสูง" class="form-control" value="<?=$hight?>" name="hight" id="hight"
                            placeholder="">
                    </fieldset>
                    <fieldset class="form-group col-md-6">
                        <label for="congenital">โรคประจำตัว</label>
                        <input type="text" placeholder="โรคประจำตัว" class="form-control" value="<?=$congenital?>" name="congenital"
                            id="congenital" placeholder="">
                    </fieldset>
                    <fieldset class="form-group col-md-6">
                        <label for="addr">ที่อยู่</label>
                        <input type="text" placeholder="ที่อยู่" class="form-control" value="<?=$addr?>" name="addr" id="addr"
                            placeholder="">
                    </fieldset>
                    <fieldset class="form-group col-md-6">
                        <label for="district">ตำบล</label>
                        <input type="text" placeholder="ตำบล" class="form-control" value="<?=$tambol?>" name="district" id="district"
                            placeholder="">
                    </fieldset>
                    <fieldset class="form-group col-md-6">
                        <label for="amphoe">อำเภอ</label>
                        <input type="text" placeholder="อำเภอ" class="form-control" value="<?=$amphur?>" name="amphoe" id="amphoe"
                            placeholder="">
                    </fieldset>
                    <fieldset class="form-group col-md-6">
                        <label for="province">จังหวัด</label>
                        <input type="text" placeholder="จังหวัด" class="form-control" value="<?=$province?>" name="province" id="province"
                            placeholder="">
                    </fieldset>
                    <fieldset class="form-group col-md-6">
                        <label for="zipcode">รหัสไปรษณีย์</label>
                        <input type="text" placeholder="รหัสไปรษณีย์" class="form-control" value="<?=$zipcode?>" name="zipcode" id="zipcode"
                            placeholder="">
                    </fieldset>
                    <fieldset class="form-group col-md-6">
                        <label for="phone">เบอร์โทร</label>
                        <input type="text" placeholder="เบอร์โทร" class="form-control" value="<?=$phone?>" name="phone" id="phone"
                            placeholder="">
                    </fieldset>
                    <fieldset class="form-group col-md-6">
                        <label for="emergency_contact">ผู้ติดต่อกรณีฉุกเฉิน</label>
                        <input type="text" placeholder="ผู้ติดต่อกรณีฉุกเฉิน" class="form-control"
                        value="<?=$emergency_contact?>" name="emergency_contact" id="emergency_contact" placeholder="">
                    </fieldset>
                    <fieldset class="form-group col-md-6">
                        <label for="mergency_phone">เบอร์ต่อกรณีฉุกเฉิน</label>
                        <input type="text" placeholder="เบอร์ต่อกรณีฉุกเฉิน" class="form-control" value="<?=$mergency_phone?>" name="mergency_phone"
                            id="mergency_phone" placeholder="">
                    </fieldset>
                    <fieldset disabled class="form-group col-md-6">
                        <label for="shirt_size">ขนาดเสื้อ(สงวนสิทธิ์การแก้ไข)</label>
                        <select   id='shirt_size' name='shirt_size' value="">
                            <option value="">- เลือก ขนาดเสื้อ -</option>
                            <?php
                                  $strDefault = $shirt_size;
                                  $strSQL = "SELECT * FROM ref_shirt_size";
                                  $objQuery = mysqli_query($conn, $strSQL);
                            while ($objResuut = mysqli_fetch_array($objQuery)) {
                                  if ($strDefault == $objResuut["shirt_size_id"]) {
                                  $sel = "selected";
                                  } else {
                                    $sel = "";
                              }
                            ?>
                            <option value="<?php echo $objResuut["shirt_size_id"]; ?>" <?php echo $sel; ?>>
                            <?php echo $objResuut["shirt_size_name"]; ?>&nbsp;<?php echo $objResuut["detail"]; ?></option>
                            <?php  }  ?>
                        </select>
                    </fieldset>

                    <div class="col-md-12 text-center mt-3">
                        <button type="submit" class='btn btn-primary btn-lg'>&nbsp;&nbsp;<i class="fa fa-save"></i>
                            บันทึก &nbsp;&nbsp;</button>
                        <a href="index.php" class="btn btn-danger btn-lg">ยกเลิก</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>

<!-- Footer section  -->
<?php include "footer.php"?>