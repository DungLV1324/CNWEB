<?php

class crud extends dbProduct
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getData($sql){
        $stmt =$this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function action($sql)
    {
        $this->conn->execute($sql);
    }
}
