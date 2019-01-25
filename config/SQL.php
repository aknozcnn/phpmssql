<?php
/**
 * Created by PhpStorm.
 * User: Sh3ll
 * Date: 25.01.2019
 * Time: 12:40
 */

class SQL
{
    protected $cn;
    protected $cInfo;

    public function __construct($credentials, $connect)
    {
        $this->cInfo = $credentials;
        if ($connect) {
            $this->Connect();
        }
    }

    public function Connect()
    {
        $con_array = array("UID" => $this->cInfo["User"], "PWD" => $this->cInfo["Pass"]);
        $this->cn = sqlsrv_connect($this->cInfo['Host'], $con_array);
        if (!$this->cn) die("Database bağlantısı başarısız!");
    }

    public function Query($query)
    {
        $result = sqlsrv_query($this->cn, $query);
        if ($result === false) {
            die("This Query does have any errors, please tell that any Admin. [ErrorCode: 1]");
        }
        return $result;
    }

    public function insertQuery($query, $var)
    {
        $result = sqlsrv_query($this->cn, $query, $var);
        if ($result === false) {
            die("This Insert Query does have any errors, please tell that any Admin. [ErrorCode: 2]");
        }
        return $result;
    }

    public function selectQuery($query, $var)
    {
        $prepare = sqlsrv_prepare($this->cn, $query, $var);
        $result = sqlsrv_execute($prepare);
        if ($result === false){
            die("This Insert Query does have any errors, please tell that any Admin. [ErrorCode: 3]");
        }
        return $result;
    }

}