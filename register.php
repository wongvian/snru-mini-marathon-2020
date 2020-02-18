<?php
 header("location:close_sys.php");

include "functions.php";

// PHP goes here!

?>

<!-- Header section  -->
<?php include "header.php"?>

<!-- Main section  -->
<div class="container">
    <h2>แบบฟอร์ม สมัครออนไลน์</h2>
    <main role="main" class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-12">
        <form class='row' id='demo1' class="demo" action="process.php?cmd=add_data" method="post" accept-charset='utf-8' enctype="multipart/form-data">
        <fieldset class="form-group col-md-6">
                        <label for="type_run">ประเภทที่สมัคร</label>

                        <select id='type_run' name='type_run' value="" required>
                            <option value="">- เลือก เประเภทที่สมัคร -</option>
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
                            <option value="<?php echo $objResuut["run_type_id"]; ?>" <?php echo $sel; ?>>
                            <?php echo $objResuut["run_type_name"]; ?></option>
                            <?php  }  ?>
                        </select>

                    </fieldset>
                <fieldset class="form-group col-md-6">
                        <label for="mode_id">รุ่นการรับสมัคร</label>

                        <select id='mode_id' name='mode_id' value="" required>
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
                    <div class="custom-control custom-radio">
                      <input class="custom-control custom-radio" type="radio" name="gender_id"  checked="true" value="1" >
                      <label class="form-check-label">ชาย</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="custom-control custom-radio" type="radio" name="gender_id"  value="2" >
                      <label class="form-check-label">หญิง</label>
                    </div>
                </fieldset>
 
                <fieldset class="form-group col-md-6">
                        <label for="prefix_id">คำนำหน้า</label>

                        <select id='prefix_id' name='prefix_id' value="" required>
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
                  <input type="text" placeholder="ชื่อ" class="form-control" name="fname" id="fname" placeholder="" required>
                </fieldset>
                <fieldset class="form-group col-md-6">
                  <label for="lname">สกุล</label>
                  <input type="text" placeholder="สกุล" class="form-control" name="lname" id="lname" placeholder="" required>
                </fieldset>
                <fieldset class="form-group col-md-6">
                  <label for="cit_id">เลขที่บัตรประชาชน / พาสปอร์ต </label>
                  <input type="text" placeholder="เลขที่บัตรประชาชน / พาสปอร์ต" class="form-control" name="cit_id" id="cit_id" placeholder="" required> 
              

                </fieldset>

                <fieldset class="form-group col-md-6">
                  <label for="bdate">วัน เดือน ปี เกิด</label>
                  <input type="text" class="form-control" name="bdate" id="bdate" placeholder="" required>
                </fieldset>      
                <fieldset class="form-group col-md-6">
                        <label for="blood_group">หมู่เลือด</label>
                        <select id='blood_group' name='blood_group' value="" required>
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
                  <input type="text" placeholder="น้ำหนัก" class="form-control" name="weight" id="weight" placeholder="">
                </fieldset>
                <fieldset class="form-group col-md-6">
                  <label for="hight">ส่วนสูง</label>
                  <input type="text" placeholder="ส่วนสูง" class="form-control" name="hight" id="hight" placeholder="">
                </fieldset>
                <fieldset class="form-group col-md-6">
                  <label for="congenital">โรคประจำตัว</label>
                  <input type="text" placeholder="โรคประจำตัว" class="form-control" name="congenital" id="congenital" placeholder="">
                </fieldset>
                <fieldset class="form-group col-md-6">
                  <label for="addr">ที่อยู่</label>
                  <input type="text" placeholder="ที่อยู่" class="form-control" name="addr" id="addr" placeholder="">
                </fieldset>
                <fieldset class="form-group col-md-6">
                  <label for="district">ตำบล</label>
                  <input type="text" placeholder="ตำบล" class="form-control" name="district" id="district" placeholder="">
                </fieldset>
                <fieldset class="form-group col-md-6">
                  <label for="amphoe">อำเภอ</label>
                  <input type="text" placeholder="อำเภอ" class="form-control" name="amphoe" id="amphoe" placeholder="">
                </fieldset>
                <fieldset class="form-group col-md-6">
                  <label for="province">จังหวัด</label>
                  <input type="text" placeholder="จังหวัด" class="form-control" name="province" id="province" placeholder="">
                </fieldset>
                <fieldset class="form-group col-md-6">
                  <label for="zipcode">รหัสไปรษณีย์</label>
                  <input type="text" placeholder="รหัสไปรษณีย์" class="form-control" name="zipcode" id="zipcode" placeholder="">
                </fieldset>
                <fieldset class="form-group col-md-6">
                  <label for="phone">เบอร์โทร</label>
                  <input type="text" placeholder="เบอร์โทร" class="form-control" name="phone" id="phone" placeholder="ระบุ เบอร์โทร" required>
                </fieldset>
                <fieldset class="form-group col-md-6">
                  <label for="emergency_contact">ผู้ติดต่อกรณีฉุกเฉิน</label>
                  <input type="text" placeholder="ผู้ติดต่อกรณีฉุกเฉิน" class="form-control" name="emergency_contact" id="emergency_contact" placeholder="">
                </fieldset>
                <fieldset class="form-group col-md-6">
                  <label for="mergency_phone">เบอร์ติดต่อกรณีฉุกเฉิน</label>
                  <input type="text" placeholder="เบอร์ต่อกรณีฉุกเฉิน" class="form-control" name="mergency_phone" id="mergency_phone" placeholder="">
                </fieldset>
                <fieldset class="form-group col-md-6">
                        <label for="shirt_size">ขนาดเสื้อ</label>
                        <select id='shirt_size' name='shirt_size' value="" required>
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
                <button type="submit"  class='btn btn-primary btn-lg'>&nbsp;&nbsp;<i class="fa fa-save"></i> บันทึก &nbsp;&nbsp;</button>
                <a href="index.php" class="btn btn-danger btn-lg">ยกเลิก</a>
              </div>
            </form>
        </div>
    </div>
</main>
</div>

<!-- Footer section  -->
<?php include "footer.php"?>