<h2>Quotes</h2>
<div class="info">
	<div class="act">
		<span class="addquote"><?php echo $html->link('Add quote', '/quotes/add'); ?></span>
	</div>
	<div class="fixed" ></div>
</div>
<?php foreach($quotes as $quote) : ?>
	<blockquote>
		<?php echo $quote['Quote']['quote']; ?>
	</blockquote>
<?php endforeach; ?>