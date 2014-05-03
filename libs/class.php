<?php

namespace libs;

/**
 * Class DemoClass
 * @package libs
 */
class DemoClass extends \PDO
{

    protected $_FullName;

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->_FullName;
    }

    /**
     * @param $_FullName
     */
    public function setFullName($_FullName)
    {
        $this->_FullName = $_FullName;
    }

    /**
     * test
     */
    public function __construct()
    {
        // code...
    }
}
