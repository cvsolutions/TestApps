<?php

namespace libs;

/**
 *
 * @author Concetto Vecchio
 *        
 */
class DemoClass extends \PDO {
	
	protected $_FullName;
	
	/**
	 * @return the $_FullName
	 */
	public function getFullName() {
		return $this->_FullName;
	}

	/**
	 * @param field_type $_FullName
	 */
	public function setFullName($_FullName) {
		$this->_FullName = $_FullName;
	}

	/**
	 * test
	 */
	public function __construct() {
		// code...
	}
}
