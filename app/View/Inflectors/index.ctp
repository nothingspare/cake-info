<?php
	if( isset( $inflected['pluralize'] ) ){
		pr( $inflected );
	}
	echo $this->Form->create( 'Inflected' , array( 'url' => '/inflectors/index' ) );
	foreach( $inflected as $inflectedKey => $inflectedValue ){
		echo $this->Form->input( $inflectedKey , array( 'value' => $inflectedValue ) );
	}
	echo $this->Form->end( 'submit' );
	$var = md5( String::uuid() );
	pr( substr( $var , 0 , 16 ) );