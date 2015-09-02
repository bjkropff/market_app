<?php


    require_once __DIR__."/../src/Item.php";

    $server = 'mysql:host=localhost;dbname=commerce';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class Market
    {

        private $title;
        private $owner;
        private $password;
        private $id;

        function __construct($title, $owner, $password, $id = null)
        {
            $this->title = $title;
            $this->owner = $owner;
            $this->password = $password;
            $this->id = $id;
        }



        
    }

?>
