<?php
class AuthorsController extends AppController {
	var $name = 'Authors';
	var $helpers = array('Html', 'Form');
	var $uses = array('Author');

	function index() {
		$authors = $this->Author->find('all');
		$this->set(compact('authors'));
	}

	function view($id) {
		if(!empty($id)) {
			$author = $this->Author->findById($id);
			$this->set(compact('author'));
		}
	}

}
?>