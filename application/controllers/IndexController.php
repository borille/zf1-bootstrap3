<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        if ( !Zend_Auth::getInstance()->hasIdentity() ) {
            $auth = new Application_Model_Auth();
            $auth->setRoleId( 'D' );

            Zend_Auth::getInstance()->getStorage()->write( $auth );
        }

        $form = new Application_Form_Login();

        if ( $this->getRequest()->isPost() ) {
            $form->isValid( $this->getRequest()->getPost() );
        }

        $this->view->form = $form;
    }


}

