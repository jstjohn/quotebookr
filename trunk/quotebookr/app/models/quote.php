<?php
class Quote extends AppModel {
	var $name = 'Quote';
	var $hasAndBelongsToMany = array('Author');
}
?>