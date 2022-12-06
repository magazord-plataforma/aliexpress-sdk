<?php
/**
 * TOP API: aliexpress.logistics.query.enum request
 * 
 * @author auto create
 * @since 1.0, 2022.07.25
 */
class AliexpressLogisticsQueryEnumRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "aliexpress.logistics.query.enum";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}