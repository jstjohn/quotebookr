<h2>Add quote</h2>
<?php

echo $form->create('Quote');
echo $form->input('quote');
echo $form->input('author');
echo $form->end('Save');

echo $html->link('Import quotes in bulk', '/quotes/import');

?>