<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Market.php";

    $server = 'mysql:host=localhost;dbname=_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);


    class MarketTest extends PHPUnit_Framework_TestCase
    {

      function test_save()
      {
        //Arrange
        $title = "Wash the dog";
        $test_market = new Market($title);

        //Act
        $test_market->save();

        //Assert
        $result = Market::getAll();
        $this->assertEquals($test_market, $result[0]);
      }

    }


?>
