<?php

require_once "../../../../koolreport/autoload.php";

use \koolreport\KoolReport;
use \koolreport\processes\Filter;
use \koolreport\processes\TimeBucket;
use \koolreport\processes\Group;
use \koolreport\processes\Limit;

class SakilaRental extends KoolReport
{
    public function settings()
    {
        //Get default connection from config.php
        $config = include "../../../config.php";

        return array(
            "dataSources"=>array(
                "conn"=>$config["mysql"]
            )
        );
    }   
	protected  function setup()
	{
    //  $this->src('conn')
    //     ->query("SELECT *   from  v_report_sumary_pay")
	// 	/*
	// 	->pipe(new Group(array(
    //         "by"=>"category_name",
    //         "sum"=>"num"
	// 	)))*/
      
    //     ->pipe(new Limit(array(100)))
	// 	->pipe($this->dataStore('data'));
        
    
    // set 1
        $this->src('conn')
        ->query("SELECT *   from  v_report_sumary_pay")
        ->pipe(new Group(array(
            "by"=>"run_type_name",
            "sum"=>"num"
        )))
        ->pipe(new Limit(array(100)))
        ->pipe($this->dataStore('data_g'));


    // set 2
        $this->src('conn')
        ->query("SELECT *   from  v_count_by_gen")
        // ->pipe(new Group(array(
        //     "by"=>"gender_detail",
        //     "sum"=>"c_gen"
        // )))
        ->pipe(new Limit(array(100)))
        ->pipe($this->dataStore('data_sex'));

	}
}
