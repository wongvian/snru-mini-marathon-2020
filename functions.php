<?php
// Functions go here




// local
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "funrun_snru";

$conn = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($conn, "utf8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// สำหรับแบ่งหน้า
$mysqli = new mysqli($servername, $username, $password, $db);
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();
}

// Fotmat วันที่ แปลงจาก คศ-> พศ.
function thai_date1($datetime, $include_time = false)
{
    $dt = explode(" ", $datetime);
    $d = explode("-", $dt[0]);
    $th_months = array(1 => "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
        "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");

    $date = ltrim($d[2], "0"); //ตัดเลข 0 ข้างหน้าออก
    $month = ltrim($d[1], "0");
    $t = "";
    if ($include_time) {
        $t = $dt[1];
    }
    return $d[2] . "/" . $d[1] . "/" . ($d[0] + 543);
    //return ($d[0] + 543)."-" . $month . "-" .$date .  "  " . $t;
}

// function สถานะ
function status_pay($val)
{
   
    if ($val == "0") {
        $re_val = "รอแจ้งชำระเงิน";
    } else if ($val == "1") {
        $re_val = "รอผู้ดูแลระบบตรวจสอบข้อมูล";
    } else if ($val == "2") {
        $re_val = "ชำระเงินค่าสมัครเรียบร้อยแล้ว";
    } else if ($val == "3") {
        $re_val = "ส่งหลักฐานการชำระเงินใหม่";
    } else {
        $re_val = "NA";
    }
    return $re_val;
}

// function set ค่าสีสถานะการเบิก
function fn_class_flag($val)
{

    if ($val == "0") {
        $re_val = "badge badge-danger primary";
    } else if ($val == "1") {
        $re_val = "badge badge-warning";
    } else if ($val == "2") {
        $re_val = "badge badge-success";
    } else if ($val == "3") {
        $re_val = "badge badge-danger";
    } else {
        $re_val = "NA";
    }
    return $re_val;
}


// function set ค่าสีสถานะการจ่ายเงิน
function fn_class_flag_status($val)
{
    
    if ($val == "0") {
        $re_val = "warning";
    } else if ($val == "1") {
        $re_val = "primary";
    } else if ($val == "2") {
        $re_val = "success";
    } else if ($val == "3") {
        $re_val = "danger";
    } else {
        $re_val = "default";
    }
    return $re_val;
}
