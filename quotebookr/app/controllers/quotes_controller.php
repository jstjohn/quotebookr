<?php
class QuotesController extends AppController {
	var $name = 'Quotes';
	var $helpers = array('Html', 'Form');
	var $uses = array('Quote');

	function index() {
		// List all quotes
		$quotes = $this->Quote->find('all');
		$this->set(compact('quotes'));
	}

	function add() {
		if($this->data) {
			$author_name = $this->data['Quote']['author'];
			$author_id = $this->Quote->Author->createOrGetID($author_name);
			$this->data['Author'] = array(
				'id' => $author_id
			);
			$this->Quote->save($this->data);
			$this->flash('Quote added', '/authors/view/'.$author_id);
		}
	}

}
?>