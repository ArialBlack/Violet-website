<?php
$feedback_block = module_invoke('webform', 'block_view', 'client-block-2');
print render($feedback_block['content']);
?>