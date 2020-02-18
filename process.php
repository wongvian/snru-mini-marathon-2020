<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Date-->
    <script src="jquery-2.1.3.min.js"></script>


    <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <link href="sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" />
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
    <script type="text/javascript">
    function successalert1() {
        Swal.fire(
            'ไม่พบข้อมูล',
            'ตรวจสอบรหัสนักศึกษาใหม่ อีกครั้ง'
        )
    }
    </script>


</head>

<body id="page-top">

</body>

</html>

<?php
session_start();
include 'functions.php';
date_default_timezone_set("Asia/Bangkok");

//admin login
if (@$_GET['cmd'] == "admin_login") {

    $strSQL = "SELECT * FROM u_admin WHERE username_d = '" . mysqli_real_escape_string($conn, $_POST["username"]) . "'
	and password_d = '" . mysqli_real_escape_string($conn, $_POST["inputPassword"]) . "'";
    $objQuery = mysqli_query($conn, $strSQL);
    $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

    if (!$objResult) {
        echo "
        <script>
        alert('Username หรือ Password ไม่ถูกต้อง');
        window.location = 'login.php';
        </script>";
    } else {

        $_SESSION["username_d"] = $objResult["username_d"];
        $_SESSION["lev"] = $objResult["lev"];
        session_write_close();
        header("location:list_regis_admin.php");

    }
    mysqli_close($conn);

}


//ออกจากระบบ
if (@$_GET['cmd'] == "logout") {
    // session_start();
    unset($_SESSION['username_d']);
    unset($_SESSION['lev']);
    header("Location: login.php");
    exit();
}

// CF Slip ตรวจสอบแล้วพบการชำระเงินจริง
if (@$_GET["cmd"] == "cf_slip") {
    $cit_id = $_POST['hcitid'];
    $sql = "update  register set payment_status='2' where cit_id='$cit_id'";

    //echo $sql;

    if (mysqli_query($conn, $sql)) {
        ?>
<script>
Swal.fire({
    title: "สำเร็จ",
    text: "บันทึกข้อมูลเรียบร้อย",
    type: "info"
}).then(function() {
    window.location = "list_regis_admin.php";
});
</script>
<?php
    } else {
        ?>
<script>
Swal.fire({
    title: "เกิดข้อผิดพลาด",
    text: "ตรวจสอบอีกครั้ง รหัสประชาชนนี้ มีข้อมูลในระบบแล้ว",
    type: "error"
}).then(function() {
    window.location = "list_regis_admin.php";
});
</script>
<?php
    }

    mysqli_close($conn);
    exit();
}


// CF Slip ให้ส่ง Slip ใหม่
if (@$_GET["cmd"] == "re_slip"&&@$_GET["cit_id"] != "") {
    $cit_id = $_GET["cit_id"];

    $sql = "update  register set payment_status='3' where cit_id='$cit_id'";

    //echo $sql;

    if (mysqli_query($conn, $sql)) {
        ?>
<script>
Swal.fire({
    title: "สำเร็จ",
    text: "บันทึกข้อมูลเรียบร้อย",
    type: "info"
}).then(function() {
    window.location = "list_regis_admin.php";
});
</script>
<?php
    } else {
        ?>
<script>
Swal.fire({
    title: "เกิดข้อผิดพลาด",
    text: "ตรวจสอบอีกครั้ง รหัสประชาชนนี้ มีข้อมูลในระบบแล้ว",
    type: "error"
}).then(function() {
    window.location = "list_regis_admin.php";
});
</script>
<?php
    }

    mysqli_close($conn);
    exit();
}


// reset ให้เป็นสถานะรอแจ้งชำระเงิน
if (@$_GET["cmd"] == "reset_slip"&&@$_GET["cit_id"] != "") {
    $cit_id = $_GET["cit_id"];

    $sql = "update  register set payment_status='0' where cit_id='$cit_id'";

    //echo $sql;

    if (mysqli_query($conn, $sql)) {
        ?>
<script>
Swal.fire({
    title: "สำเร็จ",
    text: "บันทึกข้อมูลเรียบร้อย",
    type: "info"
}).then(function() {
    window.location = "list_regis_admin.php";
});
</script>
<?php
    } else {
        ?>
<script>
Swal.fire({
    title: "เกิดข้อผิดพลาด",
    text: "ตรวจสอบอีกครั้ง รหัสประชาชนนี้ มีข้อมูลในระบบแล้ว",
    type: "error"
}).then(function() {
    window.location = "list_regis_admin.php";
});
</script>
<?php
    }

    mysqli_close($conn);
    exit();
}

## บันทึกข้อมูล ##
if (@$_GET["cmd"] == "add_data") {


    $type_run = $_POST['type_run'];
    $mode_regis = $_POST['mode_id'];
    $prefix_id = $_POST['prefix_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cit_id = $_POST['cit_id'];
    $gender_id = $_POST['gender_id'];
    $bdate = $_POST['bdate'];
    $blood_group = $_POST['blood_group'];
    $weight = $_POST['weight'];
    $hight = $_POST['hight'];
    $congenital = $_POST['congenital'];
    $addr = $_POST['addr'];
    $tambol = $_POST['district'];
    $amphur = $_POST['amphoe'];
    $province = $_POST['province'];
    $zipcode = $_POST['zipcode'];

    $phone = $_POST['phone'];
    $emergency_contact = $_POST['emergency_contact'];
    $mergency_phone = $_POST['mergency_phone'];
    $shirt_size = $_POST['shirt_size'];


// start block ตรวจสอบว่ามีข้อมูลการสมัครของรหัสประชาชนนี้หรือยัง ถ้ามีไม่ให้สมัครซ้ำ
    $sql_check = "select   * from register where cit_id='$cit_id'";
    $result = $mysqli->query($sql_check);
    $row = $result->fetch_assoc();
    if ($row) {
        ?>
<script>
Swal.fire({
    title: "เกิดข้อผิดพลาด",
    text: "ตรวจสอบอีกครั้ง รหัสประชาชนนี้ มีข้อมูลในระบบแล้ว",
    type: "error"
}).then(function() {
    window.location = "register.php";
});
</script>
<?php
        exit();
    }
//  end block

    $sqls = "insert into register(type_run,mode_regis, prefix_id,fname,lname,cit_id,gender_id,bdate,blood_group,weight,hight,congenital,addr,tambol,amphur,
   province,zipcode,phone,emergency_contact,mergency_phone,shirt_size,payment_status,date_regis) ";
    $sqls .= " values ";
    $sqls .= " ( ";
    $sqls .= " '$type_run','$mode_regis','$prefix_id','$fname','$lname','$cit_id','$gender_id','$bdate','$blood_group','$weight','$hight','$congenital','$addr','$tambol','$amphur','$province','$zipcode','$phone','$emergency_contact','$mergency_phone',  '$shirt_size','0',now() ";
    $sqls .= " ) ";

    //echo $sqls;

    if (mysqli_query($conn, $sqls)) {
        ?>
<script>
Swal.fire({
    title: "สำเร็จ",
    text: "บันทึกข้อมูลเรียบร้อย",
    type: "info"
}).then(function() {
    window.location = "regis_success.php?cit_id=<?=$cit_id;?>";
});
</script>

<?php

    } else {
        ?>

<script>
Swal.fire({
    title: "เกิดข้อผิดพลาด",
    text: "ไม่สามารถบันทึกข้อมูลได้",
    type: "warning"
}).then(function() {
    window.location = "register.php";
});
</script>

<?php
    }
    mysqli_close($conn);
    exit();
}



## แก้ไขข้อมูล ##
if (@$_GET["cmd"] == "update_data") {


    // $type_run = $_POST['type_run'];
    $mode_regis = $_POST['mode_id'];
    $prefix_id = $_POST['prefix_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cit_id = $_POST['hcit'];
    $gender_id = $_POST['gender_id'];
    $bdate = $_POST['bdate'];
    $blood_group = $_POST['blood_group'];
    $weight = $_POST['weight'];
    $hight = $_POST['hight'];
    $congenital = $_POST['congenital'];
    $addr = $_POST['addr'];
    $tambol = $_POST['district'];
    $amphur = $_POST['amphoe'];
    $province = $_POST['province'];
    $zipcode = $_POST['zipcode'];
    $phone = $_POST['phone'];
    $emergency_contact = $_POST['emergency_contact'];
    $mergency_phone = $_POST['mergency_phone'];
    // $shirt_size = $_POST['shirt_size'];


    // sql กรณีเปลี่ยนไซต์เสื้อได้
    // $sql_up ="update register set type_run='$type_run',mode_regis='$mode_regis', prefix_id='$prefix_id',fname='$fname',lname='$lname',gender_id='$gender_id',bdate='$bdate',blood_group='$blood_group',weight='$weight',hight='$hight',congenital='$congenital',addr='$addr',tambol='$tambol',amphur='$amphur',
    // province='$province',zipcode='$zipcode',phone='$phone',emergency_contact='$emergency_contact',mergency_phone='$mergency_phone',shirt_size='$shirt_size' where cit_id='$cit_id '";


    $sql_up ="update register set mode_regis='$mode_regis', prefix_id='$prefix_id',fname='$fname',lname='$lname',gender_id='$gender_id',bdate='$bdate',blood_group='$blood_group',weight='$weight',hight='$hight',congenital='$congenital',addr='$addr',tambol='$tambol',amphur='$amphur',
    province='$province',zipcode='$zipcode',phone='$phone',emergency_contact='$emergency_contact',mergency_phone='$mergency_phone' where cit_id='$cit_id '";

    //echo $sql_up;

    if (mysqli_query($conn, $sql_up)) {
        ?>
<script>
Swal.fire({
    title: "สำเร็จ",
    text: "แก้ไขข้อมูลเรียบร้อย",
    type: "info"
}).then(function() {
    window.location = "register_edit.php?cit_id=<?=$cit_id;?>";
});
</script>

<?php

    } else {
        ?>

<script>
Swal.fire({
    title: "เกิดข้อผิดพลาด",
    text: "ไม่สามารถแก้ไขข้อมูลได้",
    type: "warning"
}).then(function() {
    window.location = "register_edit.php?cit_id=<?=$cit_id;?>";
});
</script>

<?php
    }
    mysqli_close($conn);
    exit();
}


//ตรวจสอบสิทธิ์ในการแก้ไขประวัติ
if (@$_GET['cmd'] == "chk_access_update") {
    $id= $_POST['txt_cit_id'];
    $strSQL = "SELECT * FROM register WHERE  cit_id = '$id' ";
    $objQuery = mysqli_query($conn, $strSQL);
    $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

    //echo  $strSQL;
    if (!$objResult) {
?>
<script>
Swal.fire({
    title: "เกิดข้อผิดพลาด",
    text: "ข้อมูลการเข้าสู่ระบบไม่ถูกต้อง",
    type: "error"
}).then(function() {
    window.location = "authen.php";
});
</script>
<?php
    } else {

       // $_SESSION["username_d"] = $objResult["cit_id"];
        $user_cit_id=$objResult["cit_id"];

        session_write_close();
        header("location:register_edit.php?cit_id=$user_cit_id");
    }
    mysqli_close($conn);

}


// upload files
if (@$_GET['cmd'] == "chk_upload") {
    $id= $_POST['txt_cit_id'];
    $strSQL = "SELECT * FROM register WHERE  cit_id = '$id' ";
    $objQuery = mysqli_query($conn, $strSQL);
    $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

    //echo  $strSQL;
    if (!$objResult) {
?>
<script>
Swal.fire({
    title: "เกิดข้อผิดพลาด",
    text: "ข้อมูลการเข้าสู่ระบบไม่ถูกต้อง",
    type: "error"
}).then(function() {
    window.location = "authen_upload.php";
});
</script>
<?php
    } else {

        $_SESSION["username_gen"] = $objResult["cit_id"];
        $user_cit_id=$objResult["cit_id"];

        session_write_close();
        header("location:form_upload.php?cit_id=$user_cit_id");
    
       

    }
    mysqli_close($conn);
}


// อัพโหลดหลักฐานการชำระเงิน เข้าระบบ
if (@$_GET["cmd"] == "upload_slip") {
    $cit_id = $_POST['hcitid'];
    $slip_acc = $_POST['slip_acc'];
    $pay_amount = $_POST['pay_amount'];
    $pay_date = $_POST['pay_date'];
    $pay_time = $_POST['pay_time'];

    
    // บันทึก Slip เข้าระบบ
$type = strtolower(strrchr($_FILES['fileslip']['name'],"."));
if($type)
{
  
    @$fileslip = $_REQUEST['fileslip']; //รับค่าไฟล์จากฟอร์ม	
    
    
    //ฟังก์ชั่นวันที่
    date_default_timezone_set('Asia/Bangkok');
    $date = date("Ymd");	
    //ฟังก์ชั่นสุ่มตัวเลข
            $numrand = (mt_rand());
    //เพิ่มไฟล์
    $upload=$_FILES['fileslip'];
    if($upload <> '') {   //not select file
    //โฟลเดอร์ที่จะ upload file เข้าไป 
    $path="slip/";  
    
    //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
    $type = strrchr($_FILES['fileslip']['name'],".");
        
    //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
    $newname = $cit_id.$type;
    $path_copy=$path.$newname;
    $path_link="slip/".$newname;
    
    //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
    move_uploaded_file($_FILES['fileslip']['tmp_name'],$path_copy);  	
        }
    }
    
//ถ้าไม่มีการแก้ไขรูปภาพ



    $sql = "update  register set slip_acc='$slip_acc',pay_amount='$pay_amount',pay_date='$pay_date',pay_time='$pay_time', file_payment='$newname', payment_status='1' where cit_id='$cit_id'";

    //echo $sql;

    if (mysqli_query($conn, $sql)) {
        ?>
<script>
Swal.fire({
    title: "สำเร็จ",
    text: "รอผู้ดูแลระบบตรวจสอบข้อมูล",
    type: "info"
}).then(function() {
    window.location = 'list_regis.php';
});
</script>
<?php
    } else {
?>
<script>
Swal.fire({
    title: "เกิดความผิดพลาด",
    text: "ไม่สามารถบันทึกข้อมูลได้",
    type: "error"
}).then(function() {
    window.location = "form_upload.php?cit_id=<?=$cit_id;?>";
});
</script>

<?php
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    exit();
}




?>