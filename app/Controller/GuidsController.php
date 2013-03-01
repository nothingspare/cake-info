<?php
class GuidsController extends AppController{
	public $name = 'Guids';
	function generate( $int = '10' ){
		$uuids = array();
		for( $i = 0; $i < $int; $i++ ){
			$uuids[] = String::uuid();
		}
		$this->set( 'uuids' , $uuids );
	}
}