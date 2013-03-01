<?php
class VariablesController extends AppController{
	public $name = "Variables";
	public function index(){}
	public function defined( $skip = 999 ){
		$defined = get_defined_constants();
		$defined = array_slice( $defined , $skip );
		$this->set( 'defined' , $defined );
		//pr( $defined );
	}
	public function globals(){
		$this->set( 'globals' , $GLOBALS );
	}
}