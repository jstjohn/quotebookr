<?php

echo $form->create(null, array('action' => 'import'));
echo $form->label('Quotes');
echo $form->textarea('import_data', array('style' => 'height: 200px; font-size: 0.9em;'));
echo $form->end('Submit');

?>