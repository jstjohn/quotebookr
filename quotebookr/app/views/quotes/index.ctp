<h2>Quotes</h2>
<div class="info">
	<div class="act">
		<span class="addquote"><?php echo $html->link('Add quote', '/quotes/add'); ?></span>
	</div>
</div>
<?php foreach($quotes as $quote) : ?>
	<p>
		<?php echo $quote['Quote']['quote']; ?>
	</p>
<?php endforeach; ?>