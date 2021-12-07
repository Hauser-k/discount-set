<?php

namespace Hauser\DiscountSet\jingdong\Request;


class SearchWareRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.search.ware";
	}
	
	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
    public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $key;

    public function setKey($key){
        $this->apiParas['key'] = $key;
    }
    public function getKey(){
        return $this->apiParas['key'];
    }
    private  $filt_type;

    public function setFilt_type($filt_type){
        $this->apiParas['filt_type'] = $filt_type;
    }
    public function getFilt_type(){
        return $this->apiParas['filt_type'];
    }
    private  $area_ids;

    public function setArea_ids($area_ids){
        $this->apiParas['area_ids'] = $area_ids;
    }
    public function getArea_ids(){
        return $this->apiParas['area_ids'];
    }
    private  $sort_type;

    public function setSort_type($sort_type){
        $this->apiParas['sort_type'] = $sort_type;
    }
    public function getSort_type(){
        return $this->apiParas['sort_type'];
    }
    private  $page;

    public function setPage($page){
        $this->apiParas['page'] = $page;
    }
    public function getPage(){
        return $this->apiParas['page'];
    }
    private  $charset;

    public function setCharset($charset){
        $this->apiParas['charset'] = $charset;
    }
    public function getCharset(){
        return $this->apiParas['charset'];
    }
    private  $urlencode;

    public function setUrlencode($urlencode){
        $this->apiParas['urlencode'] = $urlencode;
    }
    public function getUrlencode(){
        return $this->apiParas['urlencode'];
    }
}

?>