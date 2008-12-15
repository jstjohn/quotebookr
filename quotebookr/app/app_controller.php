<?php
class AppController extends Controller {
	var $components = array('DebugKit.Toolbar');
	var $layout = 'pocket';

	function flash($msg,$to){
		$this->Session->setFlash($msg);
		$this->redirect($to);
		exit;
	}

}
?>