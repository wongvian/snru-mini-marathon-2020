<?php
require_once("functions.php");
// Database connection info
$dbDetails = array(
    'host' => $servername ,
    'user' => $username,
    'pass' => $password,
    'db'   => $db
);

// DB table to use
$table = 'v_register';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database. 
// The `dt` parameter represents the DataTables column identifier.
$columns = array(
    array( 'db' => 'run_type_name', 'dt' => 0 ),
    array( 'db' => 'run_type_name',  'dt' => 1 ),
    array( 'db' => 'run_type_name',      'dt' => 2 ),
    array( 'db' => 'run_type_name',     'dt' => 3 ),
    array( 'db' => 'run_type_name',    'dt' => 4 )
);

// Include SQL query processing class
require('ssp.class.php' );

// Output data as json format
echo json_encode(
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
);

?>