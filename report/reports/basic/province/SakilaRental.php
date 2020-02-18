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
                "sakila_rental"=>$config["oracle"]
            )
        );
    }   
	protected  function setup()
	{
     $this->src('sakila_rental')
        ->query("SELECT *   from  v_report_province")
  
      /*  ->pipe(new Group(array(
            "by"=>"FAC_NAME_TH",
            "sum"=>"NUM_REG"
        )))*/
  
        ->pipe(new Limit(array(100)))
        ->pipe($this->dataStore('data'));
	}
}
