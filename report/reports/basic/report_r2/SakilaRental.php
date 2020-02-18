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
  /*  protected function setup()
    {
        $this->src('sakila_rental')
        ->query("SELECT ROWSN,PROGRAM_NAME_TH,DEGREE_NAME,NUM_REG,NUM_PAY FROM V_STD_REPORT_R1")
        //->pipe(new TimeBucket(array(
		->pipe(new Group(array(
            "PROGRAM_NAME_TH"=>"month"
        )))
        ->pipe(new Group(array(
            "by"=>"PROGRAM_NAME_TH",
            "sum"=>"NUM_REG"
        )))
        ->pipe($this->dataStore('PROGRAM_NAME_TH'));
    } */
	
	protected  function setup()
	{
     $this->src('sakila_rental')
        ->query("SELECT ROWSN,FAC_ID,FAC_NAME_TH,PROGRAM_NAME_TH,DEGREE_NAME,NUM_REG,NUM_PAY,NUM_REGIS FROM V_STD_REPORT_R1")
  
      /*  ->pipe(new Group(array(
            "by"=>"FAC_NAME_TH",
            "sum"=>"NUM_REG"
        )))*/
  
        ->pipe(new Limit(array(100)))
        ->pipe($this->dataStore('data'));
	}
}
