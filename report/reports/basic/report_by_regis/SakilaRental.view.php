<?php 
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\ColumnChart;
    use \koolreport\widgets\google\PieChart;
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">


<div class="text-center">
	<h3>สถิติ จำนวนผู้สมัคร รายการเดิน-วิ่ง "ราชภัฏสกลนคร มินิมาราธอน" </h3>
	<h3></h3>

</div>


<hr/>

<?php
/*ColumnChart::create(array(
    "dataStore"=>$this->dataStore('PROGRAM_NAME_TH'),  
    "columns"=>array(
        "PROGRAM_NAME_TH"=>array(
            "label"=>"PROGRAM_NAME_TH",
           // "type"=>"number",
           // "prefix"=>"$",
        ),
        "NUM_REG"=>array(
            "label"=>"NUM_REG",
            "type"=>"number",
            "prefix"=>"$",
        )
    ),
    "width"=>"100%",
));
*/
?>

<?php
PieChart::create(array(
    "dataStore"=>$this->dataStore('data_sex'),  
    "columns"=>array(
        "gender_detail"=>array(
            "label"=>"ประเภทที่สมัคร",
           // "type"=>"number",
           // "prefix"=>"$",
        ),
        "c_gen"=>array(
            "label"=>"num",
            "type"=>"num",
        )
    ),
    "width"=>"100%",
));
?>
<?php
PieChart::create(array(
    "dataStore"=>$this->dataStore('data_g'),  
    "columns"=>array(
        "run_type_name"=>array(
            "label"=>"ประเภทที่สมัคร",
           // "type"=>"number",
           // "prefix"=>"$",
        ),
        "c_regis"=>array(
            "label"=>"num",
            "type"=>"num",
        ),
        "c_pay"=>array(
            "label"=>"num",
            "type"=>"num",
        )
    ),
    "width"=>"100%",
));
?>

<?php
    Table::create(array(
        "dataSource"=>$this->dataStore('data_g'),
        "showFooter"=>true,
        "columns"=>array(
            "run_type_name"=>array(
                "label"=>"ประเภท",
            ),
            "c_regis"=>array(
                "label"=>"จำนวนสมัคร",
			),
            "c_pay"=>array(
                "label"=>"ชำระเงิน"
            ),
            "c_regis"=>array(
                "cssStyle"=>"text-align:right",
                "footer"=>"sum",
                "footerText"=>"<b>รวม:</b> @value",
                "label"=>"สมัคร"
			),
            "c_pay"=>array(
                "cssStyle"=>"text-align:right",
                "footer"=>"sum",
                "footerText"=>"<b>รวม:</b> @value",
                "label"=>"ชำระค่าสมัคร"
			)
        ),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )//,
        //"removeDuplicate"=>array("category_name"),
        /*,"paging"=>array(
            "pageSize"=>10,
            "pageIndex"=>0,
        ),*/
    ));
?>
