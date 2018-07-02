<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageOutputController extends Controller
{
    protected $modelUsed;
	protected $operationName;
	protected $isSuccessfull;

    public function __construct(string $modelUsed, string $operationName, string $isSuccessfull) {
        $this->modelUsed = $modelUsed;
		$this->operationName = $operationName;
		$this->isSuccessfull = $isSuccessfull;
    }	
    public function toJSON(){
		if(!$this->isSuccessfull){
			$message = $this->modelUsed." ".$this->operationName." could not be completed, please try again";
		}else{
			$message = $this->modelUsed." ".$this->operationName." successfully";
		}
		$returnArray = array("message"=>$message, "success"=>$this->isSuccessfull, "operation"=>$this->operationName);	
		return json_encode($returnArray);
	}
    public function toHTML(){
		if(!$this->isSuccessfull){
			$message = "<p>".$this->modelUsed." ".$this->operationName." could not be completed, please try again</p>";
		}else{
			$message = "<p>".$this->modelUsed." ".$this->operationName." successfully</p>";
		}
		$returnArray = $message;
		return json_encode($returnArray);
	}	
}
