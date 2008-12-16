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
			$success = $this->_add_quote($this->data, $author_name);
			if($success) {
				$this->flash('Quote added', '/authors/view/'.$author_id);
			} else {
				$this->flash('Unable to save quote', '/');
			}
		}
	}

	function _add_quote($quote_data, $author) {
		$author_id = $this->Quote->Author->createOrGetID($author_name);
		$quote_data['Author'] = array(
			'id' => $author_id
		);
		$this->Quote->create();
		$success = $this->Quote->save($quote_data);
		return $success;
	}

	/**
	 * For bulk quote imports
	 */
	function import() {
		if($this->data) {
			$import_string = $this->data['Quote']['import_data'];
			$import_string = str_replace("\r\n", "\n", $import_string);
			$import_arr = explode("\n\n", $import_string);
			$new_data = array();
			foreach($import_arr as $quote_full) {
				$quote_parts = explode("\n-", $quote_full);
				$quote = empty($quote_parts[0]) ? '' : $quote_parts[0];
				$author = empty($quote_parts[1]) ? '' : $quote_parts[1];

				// Prepare data to save
				$quote_data = array(
					'Quote' => array(
						'quote' => $quote
					)
				);
				$this->_add_quote($quote_data, $author);
			}
			$this->flash('All quotes have been added!', '/quotes');
		}
	}

}
?>