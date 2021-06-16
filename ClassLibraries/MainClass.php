<?php

require_once('DatabaseCon.php');

class mainClass extends DataBase{

    function dbtest(){
        $result = $this->dbh;
        return $result;
    }

    function anotherTest(){
        $myQuery = "SELECT * FROM id ORDER BY DESC";
        $result = mysqli_query($this->dbh, $myQuery);
        return $result;
    }

    function saveInput($inputData, $code)
    {

        if(is_object($inputData) || is_array($inputData))
        {
            $your_name = $inputData['your_name'];
            $fathers_name = $inputData['fathers_name'];
            $your_message = $inputData['your_message'];

            $myQuery = "INSERT INTO certificate_input  (
                your_name,
                fathers_name,
                your_message,
                code) VALUES (
                '$your_name',
                '$fathers_name',
                '$your_message',
                '$code'
                )";

            $result = mysqli_query($this->dbh, $myQuery);
            if(!$result){
            return "Error: " .mysqli_error($this->dbh);
            }else{
            return "good";
            }

        }
    }

    function fetchInput($code)
    {
        $myQuery = "SELECT * FROM certificate_input WHERE code = '$code'";
        $result = mysqli_query($this->dbh, $myQuery);
        if(!$result)
        {
            return "error";
        }
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

}