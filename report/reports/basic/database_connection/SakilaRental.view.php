<?php 
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\ColumnChart;
    use \koolreport\widgets\google\PieChart;
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">


<div class="text-center">
	<h3>จำนวนผู้สมัคร เพื่อเข้าศึกษาต่อชั้นมัธยมศึกษาปีที่ 4 </h3>
	<h3>ประจำปีการศึกษา 2562</h3>
    <h3>โรงเรียนเตรียมอุดมศึกษา ภาคตะวันออกเฉียงเหนือ</h3>
    <h3>ประเภท โควตาภาคตะวันออกเฉียงเหนือและความสามารถพิเศษ</h3>
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
    "dataStore"=>$this->dataStore('data_g'),  
    "columns"=>array(
        "category_name"=>array(
            "label"=>"category_name",
           // "type"=>"number",
           // "prefix"=>"$",
        ),
        "num"=>array(
            "label"=>"num",
            "type"=>"num",
          //  "prefix"=>"",
        )
    ),
    "width"=>"100%",
));
?>

<?php
PieChart::create(array(
    "dataStore"=>$this->dataStore('data'),  
    "columns"=>array(
        "plan_name_th"=>array(
            "label"=>"plan_name_th",
           // "type"=>"number",
           // "prefix"=>"$",
        ),
        "num"=>array(
            "label"=>"num",
            "type"=>"num",
          //  "prefix"=>"",
        )
    ),
    "width"=>"100%",
));
?>

<?php
    Table::create(array(
        "dataSource"=>$this->dataStore('data'),
        "showFooter"=>true,
        "columns"=>array(
            "category_name"=>array(
                "label"=>"ประเภท",
            ),
            "plan_name_th"=>array(
                "label"=>"แผนการเรียน",
            ),
            "num"=>array(
                "label"=>"จำนวนผู้สมัคร",
			),
            "num"=>array(
                "cssStyle"=>"text-align:right",
                "footer"=>"sum",
                "footerText"=>"<b>รวม:</b> @value",
                "label"=>"จำนวนผู้สมัคร"
			)
        ),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        ),
        "removeDuplicate"=>array("category_name"),
        /*,"paging"=>array(
            "pageSize"=>10,
            "pageIndex"=>0,
        ),*/
    ));
?>
