<?php
namespace controllers;

use ws\controllers\AbstractWsController;

 /**
 * Controller MainController
 **/
class MainController extends AbstractWsController {
/**
 * 
 * @get("_default","name"=>"Home")
 */
	public function index(){
	    $menu=$this->getMenu('Home');
	    $messages=$this->dataProvider->getMessages();
	    $content=nl2br($this->dataProvider->getPageContent('Home'));
	    $this->loadView('MainController/index.html',compact('messages','content') + $menu);
	    
	    $partners=$this->getPartner('Partner');
	    $messages=$this->dataProvider->getPartners();
	    $content=$this->getMenu('Partners');
	    var_dump($partners);
	    var_dump($messages);
	    var_dump(content);
	}

	/**
	 *@route("contact","methods"=>["get"],"name"=>"Contact")
	**/
	public function contactForm(){
		
		$this->loadView('MainController/contactForm.html');

	}


	/**
	 *@route("partners","methods"=>["get"],"name"=>"Partners")
	**/
	public function partnersList(){
		
		$this->loadView('MainController/partnersList.html');

	}


	/**
	 *@route("partner/{name}","methods"=>["get"])
	**/
	public function partnerDetails($name){
		
		$this->loadView('MainController/partnerDetails.html');

	}


	/**
	 *@route("sendMessage","methods"=>["post"])
	**/
	public function sendMessage(){
		
		$this->loadView('MainController/sendMessage.html');

	}

}

