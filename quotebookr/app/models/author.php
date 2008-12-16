<?php
class Author extends AppModel {
	var $name = 'Author';
	var $hasAndBelongsToMany = array('Quote');
	var $validate = array(
		'name' => array(
			'rule' => 'isUnique',
			'message' => 'That author already exists'
		)
	);

	function createOrGetID($author_name) {
		$data = $this->findByName($author_name);
		if(!empty($data)) {
			return $data['Author']['id'];
		} else {
			$data = array(
				'Author' => array(
					'name' => $author_name
				)
			);
			$this->save($data);
			$id = $this->id;
			return $id;
		}
	}
}
?>