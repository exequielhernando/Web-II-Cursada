<?php
    class Api{
        
        function __construct() {

        }
       
        public function json_response($data, $status){
            header("Content-type: application/json");
            header("HTTP/1.1 " . $status. " " . $this->_requestStatus($status));
            return json_encode($data);
        }
        public function _requestStatus($code){
            $status = array(
                200 => "OK",
                404 => "Not found",
                500 => "Internal Server Error"
            );
            return ($status[$code]) ? ($status[$code]) : $status[500];
        }








    }
?>