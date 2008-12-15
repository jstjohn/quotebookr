<?php foreach($authors as $author) : ?>
	<p>
		<?php
			$name = $author['Author']['name'];
			$id = $author['Author']['id'];
			echo $html->link($name, '/authors/view/'.$id);
		?>
	</p>
<?php endforeach; ?>