<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    /**
     * iniciar a configuração do ACL
     *
     * @return Urbs_Acl_Setup
     */
    protected function _initAcl()
    {
        $aclSetup = new Application_Acl_Setup();
        return $aclSetup;
    }

}

