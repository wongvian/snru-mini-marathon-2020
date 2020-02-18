<?php 
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\ColumnChart;
    use \koolreport\widgets\google\PieChart;
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">


<div class="text-center">
    <h1>รายงานจำนวนผู้สมัครเรียน</h1>
    <h1>รอบที่ 2.1 ความร่วมมือกับโรงเรียน</h1>
    <h4></h4>
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
    "dataStore"=>$this->dataStore('data'),  
    "columns"=>array(
        "PROGRAM_NAME_TH"=>array(
            "label"=>"PROGRAM_NAME_TH",
           // "type"=>"number",
           // "prefix"=>"$",
        ),
        "NUM_REG"=>array(
            "label"=>"NUM_REG",
            "type"=>"number",
          //  "prefix"=>"",
        ),
        "NUM_REGIS"=>array(
            "label"=>"NUM_REGIS",
            "type"=>"number",
          //  "prefix"=>"",
        )
    ),
    "width"=>"100%",
));
?>

<?php
/*Table::create(array(
    "dataStore"=>$this->dataStore('PROGRAM_NAME_TH'),
    "columns"=>array(
		"PROGRAM_NAME_TH"=>array(
			"label"=>"PROGRAM_NAME_TH",
        ),
        "NUM_REG"=>array(
			"label"=>"NUM_REG",
			"type"=>"number",
        ),
        "NUM_PAY"=>array(
            "label"=>"NUM_PAY",
        ),
        "NUM_REG"=>array(
            "cssStyle"=>"text-align:right",
            "prefix"=>"$",
            "footer"=>"sum",
            "footerText"=>"<b>Total:</b> @value"
        )
    ),
    "cssClass"=>array(
        "table"=>"table table-hover table-bordered"
    )
));
*/
?>

<?php
    Table::create(array(
        "dataSource"=>$this->dataStore('data'),
        "showFooter"=>true,
        "columns"=>array(
            "FAC_NAME_TH"=>array(
                "label"=>"คณะ",
            ),
            "PROGRAM_NAME_TH"=>array(
                "label"=>"สาขาวิชา",
            ),
            "DEGREE_NAME"=>array(
                "label"=>"หลักสูตร",
            ),
            "NUM_REG"=>array(
                "label"=>"จำนวนผู้สมัคร",
            ),
            "NUM_PAY"=>array(
                "label"=>"จ่ายเงิน",
            )            ,
            "NUM_REGIS"=>array(
                "label"=>"รายงานตัว",
            ),
            "NUM_REG"=>array(
                "cssStyle"=>"text-align:right",
                "footer"=>"sum",
                "footerText"=>"<b>รวม:</b> @value",
                "label"=>"จำนวนผู้สมัคร"
            ),
            "NUM_PAY"=>array(
                "cssStyle"=>"text-align:right",
                "footer"=>"sum",
                "footerText"=>"<b>รวม:</b> @value",
                "label"=>"ชำระเงิน"
            ),
            "NUM_REGIS"=>array(
                "cssStyle"=>"text-align:right",
                "footer"=>"sum",
                "footerText"=>"<b>รวม:</b> @value",
                "label"=>"รายงานตัว"
            )
        ),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        ),
        "removeDuplicate"=>array("FAC_NAME_TH"),
        /*,"paging"=>array(
            "pageSize"=>10,
            "pageIndex"=>0,
        ),*/
    ));
?>