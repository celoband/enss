<?php
class AppController extends Controller {
    var $components = array('Auth', 'Session');
    var $helpers = array('Html', 'Form', 'Session');

    function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->authorize = array('index', 'actions');
        #$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        #$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'logout');
        #$this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'add');
    }
}
?>
