<?php
class InflectorsController extends AppController{
	public $name = 'Inflectors';
	public $uses = array();
	public $helpers = array( 'Form' );
	public function index(){
		$inflected = array();
		$inflected['string'] = '';
		if( !empty( $this->request->data ) and !empty( $this->request->data['Inflected']['string'] ) ){
			$inflected = array();
			$inflected['string']		= $this->request->data['Inflected']['string'];
			$inflected['pluralize']		= Inflector::pluralize( $this->request->data['Inflected']['string'] );
			$inflected['singularize']	= Inflector::singularize( $this->request->data['Inflected']['string'] );
			$inflected['camelize']		= Inflector::camelize( $this->request->data['Inflected']['string'] );
			$inflected['underscore']	= Inflector::underscore( $this->request->data['Inflected']['string'] );
			$inflected['humanize']		= Inflector::humanize( $this->request->data['Inflected']['string'] );
			$inflected['tableize']		= Inflector::tableize( $this->request->data['Inflected']['string'] );
			$inflected['classify']		= Inflector::classify( $this->request->data['Inflected']['string'] );
			$inflected['variable']		= Inflector::variable( $this->request->data['Inflected']['string'] );
			$inflected['slug']			= Inflector::slug( $this->data['Inflected']['string'] );
		}
		$this->set( 'inflected' , $inflected );
	}
}