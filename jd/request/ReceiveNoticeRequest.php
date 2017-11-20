<?php
class ReceiveNoticeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.receiveNotice";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                    	                   			private $xml;
    	                        
	public function setXml($xml){
		$this->xml = $xml;
         $this->apiParas["xml"] = $xml;
	}

	public function getXml(){
	  return $this->xml;
	}

}





        
 

