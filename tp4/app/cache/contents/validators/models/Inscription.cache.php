<?php
return array("id"=>array(array("type"=>"id","constraints"=>array("autoinc"=>true))),"nom"=>array(array("type"=>"length","constraints"=>array("max"=>50,"notNull"=>true))),"email"=>array(array("type"=>"email","constraints"=>array("notNull"=>true)),array("type"=>"length","constraints"=>array("max"=>100))),"dateHeure"=>array(array("type"=>"notNull","constraints"=>array())));
