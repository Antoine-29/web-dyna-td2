<?php
namespace controllers;
 /**
 * Controller InscriptionsController
 **/
class InscriptionsController extends ControllerBase{

	public function index(){
		$this->loadView("InscriptionsController/index.html");
	}

	/**
	 *@route("/inscription","methods"=>["post"])
	**/
	public function inscription($name="Nom ou pseudo",$mail="Adresse mail"){
		
		$this->loadView('InscriptionsController/inscription.php',compact('name','mail'));

	}

}
