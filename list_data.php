
<?php
include("functions.php");
?>

    <!-- Header section  -->
<?php include("header.php") ?>
    <!-- Main section  -->
    <div class="container">
    <table id="example" class="display" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>First name</th>
          <th>Last name</th>
          <th>Position</th>
          <th>Office</th>
          <th>Start date</th>
        
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>First name</th>
          <th>Last name</th>
          <th>Position</th>
          <th>Office</th>
          <th>Start date</th>
        
        </tr>
      </tfoot>
    </table>
    </div>
    <script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {
      "processing": true,
      "serverSide": true,
      "ajax": "json_register.php",
      

  "columnDefs": [ {
    "targets": 4,
    "data": "id",
    "render": function ( data, type, row, meta ) {
      return '<a href="authen.php?'+data+'">รายละเอียด/แก้ไข</a>';
    }
  } ]


    } );

  } );
  </script>

    <!-- Footer section  -->
<?php //include("footer.php") ?>