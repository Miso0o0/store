<?php

class MySql{
    private $host='localhost' ;
    private $username='root' ;
    private $password='' ;
    private $dbname='shop' ;

    protected function connect(){
        $dsn='mysql:host='.$this->host.';dbname='.$this->dbname ;
      
        $conn=new PDO($dsn,$this->username,$this->password) ;
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC) ;
        return $conn ; 

        

        
    }

}

 