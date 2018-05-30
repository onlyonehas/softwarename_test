<?php 

class Software{
	private $softwareId;
	private $editionId;
	private $version;
	private $editionName;
	private $softwareName;

	public function setVersion($version){
		if(is_float($version)){
			$version_formatted = 'v'.$version;
		    $this->isInternalRelease($version)? $version_formatted .= ' [internal]' : '';
			$this->version = $version_formatted;
		} else {
			$this->version = "Unknown Version";
		}
	}

	public function setSoftwareid($softwareId)
	{
		$this->softwareId = $softwareId;
	}

	public function setEditionName($editionId){
	    if ($editionId == "Std")
	       $this->editionName = "(Std Edition)";
	    else if ($editionId == "StdTrial")
	        $this->editionName = "Trial";
	    else if ($editionId == "Studio")
	        $this->editionName = "Studio";
	    else 
	    	$this->editionName = "Unknown Edition";
	}

	public function setSoftwareName($softwareId)
	{

	    if ($softwareId == "PP")
			$this->softwareName =  "PortraitPro";
	    else if ($softwareId == "PPB")
	        $this->softwareName =  "PortraitPro Body";
	    else if ($softwareId == "SPE")
			$this->softwareName =  "LandscapePro";
	    else if ($softwareId == "LP")
			$this->softwareName =  "Smart Photo Editor";
	 	else if ($softwareId == "FP")
			$this->softwareName =  "FoodscapePro";
	    else 
	    	$this->softwareName =  "Invalid Software Name";
	}

	public function getSoftwareid()
	{
		return $this->softwareId;
	}

	public function getEditionid()
	{
		return $this->editionId;
	}

	public function getVersion()
	{
		return $this->version;
	}

	public function getSoftwareName(){
		return  $this->softwareName;
	}
	
	public function getSoftwareDescription()
	{  
	    $description = $this->softwareName.' '.$this->editionName.' '.$this->version;
	    return $description;
	}

	public function isInternalRelease($version)
	{
	    if(substr_count($version, ".")>2){
	        return true;
	    }
	     return false;
	}

}