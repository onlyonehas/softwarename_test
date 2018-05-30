<?php
include('Software.php');

$softwareId = $_GET['softwareId'];
$editionId = $_GET['editionId'];
$version = $_GET['version'];

//echo generate_software_description($softwareId,$editionId,$version);
$software = new Software();
$software->setSoftwareName($_GET['softwareId']);
$software->setEditionName($editionId);
$software->setVersion($version);
echo $software->getSoftwareDescription();


?>


