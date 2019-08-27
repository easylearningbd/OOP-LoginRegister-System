<?php 

/**
 * Zyrass = Controller enfant de Dcontroller
 */
class Zyrass extends Dcontroller {
	
	public function __construct( )
	{
		// parent::__construct( );
	}

	public function eleanore($param) {
		echo  "Éléanore from method \n" . $param;
	}
	
}
