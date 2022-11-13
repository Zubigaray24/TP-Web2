<?php

class APIView {
	
	public function response($data, $status) {
	    header("Content-Type: application/json");
	    header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
	    echo json_encode($data);
	}

	  private function _requestStatus($code){
	      $status = array(
	        200 => "OK",
			201 => "Created",
			204 => "No Contest",
			400 => "Bad Request",
			401 => "Unautorize",
	        404 => "Not Found",
	        500 => "Internal Server Error"
	      );
      return (isset($status[$code]))? $status[$code] : $status[500];
    }
}