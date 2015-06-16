<?php

class Application_Model_Auth implements Zend_Acl_Role_Interface
{
    /**
     * @var string
     */
    protected $_roleId;

    /**
     * Returns the string identifier of the Role
     *
     * @return string
     */
    public function getRoleId()
    {
        return $this->_roleId;
    }

    /**
     * @param $roleId
     * @return $this
     */
    public function setRoleId( $roleId )
    {
        $this->_roleId = $roleId;
        return $this;
    }

    /**
     * Linguagem
     * 1 => PT
     * 2 => EN
     * @return int
     */
    public function getLanguage()
    {
        return 1;
    }

}

