<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ราชภัฏสกลนคร มินิมาราธอน</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css/normalize.css">
   
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/new_navbar_color.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Niramit&display=swap" rel="stylesheet">
    
    <link href="sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" />
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>


    <link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.min.css">
  <script src="media/js/jquery.js" type="text/javascript"></script>
  <script src="media/js/jquery.dataTables.js" type="text/javascript"></script>
  <style media="screen">
     .content{
      width: 900px;
      margin:0 auto;
      padding: 10px;
      border: 1px solid #999;
    } 
  </style>




    <style type="text/css">
  /**
 * pricing
 * --------------------------------------------------
 */
.pricing ul {
  padding: 0;
  list-style: none;
}
.pricing .unit {
  position: relative;
  display: inline-block;
  min-width: 250px;
  text-align: center;
          border-radius: 4px;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
     -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
          box-shadow: 0 1px 2px rgba(0, 0, 0, .2);

  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
}
.pricing .unit.active {
  top: 5px;
  z-index: 1;
  margin-right: -36px;
  margin-left: -36px;
  -webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .6);
     -moz-box-shadow: 0 0 8px rgba(0, 0, 0, .6);
          box-shadow: 0 0 8px rgba(0, 0, 0, .6);
}
.pricing .unit.active .price-title h3 {
  font-size: 40px;
}
@media screen and (max-width: 767px) {
  .pricing .unit {
    display: block;
    margin-bottom: 20px;
  }
  .pricing .unit.active {
    top: 0;
    margin-right: 0;
    margin-left: 0;
  }
  .pricing .unit.active .price-title h3 {
    font-size: 30px;
  }
}
.pricing .price-title {
  padding: 20px 20px 10px;
  color: #fff;
          border-top-left-radius: 4px;
          border-top-right-radius: 4px;

  -webkit-border-top-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
  -webkit-border-top-right-radius: 4px;
  -moz-border-radius-topright: 4px;
}
.pricing .price-title h3, .pricing .price-title h3 > p {
  margin: 0;
}
.pricing .price-body {
  padding: 20px 20px 10px;
}
.pricing .price-body ul {
  padding-top: 10px;
}
.pricing .price-body li {
  margin-bottom: 10px;
}
.pricing .price-body h4 {
  margin: 0;
}
.pricing .price-foot {
  padding: 20px;
  background-color: #e6e9ed;
          border-bottom-right-radius: 4px;
          border-bottom-left-radius: 4px;

  -webkit-border-bottom-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
  -webkit-border-bottom-right-radius: 4px;
  -moz-border-radius-bottomright: 4px;
}
.pricing .price-primary .price-title {
  background-color: #4fc1e9;
}
.pricing .price-primary .price-body {
  background-color: #d7f1fa;
}
.pricing .price-primary .price-body ul {
  border-top: 1px solid #aae1f4;
}
.pricing .price-success .price-title {
  background-color: #a0d468;
}
.pricing .price-success .price-body {
  background-color: #ebf6df;
}
.pricing .price-success .price-body ul {
  border-top: 1px solid #d2ebb7;
}
.pricing .price-warning .price-title {
  background-color: #ffce54;
}
.pricing .price-warning .price-body {
  background-color: #fffaed;
}
.pricing .price-warning .price-body ul {
  border-top: 1px solid #ffebba;
}
    </style>

<!-- Code ติดตาม -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147379926-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147379926-2');
</script>


</head>
<body>
<style>
      body {
        font-family: 'Niramit', sans-serif;
        font-size: 16px;
      }
    </style>

<!-- Navbar using Bootstrap  -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
    
            <a class="navbar-brand" href="index.php">
    <!-- <img src="logo.png"  height="40" alt=""> -->
    ราชภัฏสกลนคร มินิมาราธอน
  </a>

        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href='step.php'>ขั้นตอนการสมัคร</a><li>
                <li><a href='register.php'>สมัครออนไลน์</a><li>
                <li><a href='authen_upload.php'>แจ้งชำระเงิน</a><li>
                <?php 
              if (@$_SESSION['username_d'] <> "") {
                 ?>
            <li><a href='list_regis_admin.php'>ตรวจสอบสถานะการชำระเงิน:Admin</a><li>
            <li><a href='process.php?cmd=logout'>ออกจากระบบ</a><li>
              <?php } else { ?>
                <li><a href='list_regis.php'>รายชื่อนักวิ่ง/ค้นหา BIB</a><li>
                <li><a href='bib.php'>เบอร์ BIB</a><li>
              <?php } ?>
                <li><a href='shirt.php'>แบบเสื้อ</a><li>
                <li><a href='reward.php'>เหรียญและถ้วยรางวัล</a><li>
                <li><a href='street.php'>เส้นทางการวิ่ง</a><li>                                        
                <li><a href='http://funrun.snru.ac.th/report/reports/basic/report_by_regis/index.php'>สถิติการสมัครวิ่ง</a><li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

