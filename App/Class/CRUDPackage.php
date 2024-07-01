<?php

namespace Class\CRUD\Package;
require_once "./PDOConnection.php";


use \Class\Connection\PDOConnection;

class CRUDPackage extends PDOConnection
{
    public function __construct(){
        parent::__construct(true);
    }

    public function Insert(){
        // $this->pdo->
    }
    public function Update(){

    }
    public function Delete(){

    }
    
    public function ValiadateInput(){

    }
    public function CSRF(){

    }

}
?>