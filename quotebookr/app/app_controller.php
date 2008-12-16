<?php
class AppController extends Controller {
    var $components = array('DebugKit.Toolbar');
	
	// Enable themes
	var $view = 'theme';
	var $layout = 'default';
	var $theme = 'inove';

	function flash($msg,$to){
		$this->Session->setFlash($msg);
		$this->redirect($to);
		exit;
	}

}
?>