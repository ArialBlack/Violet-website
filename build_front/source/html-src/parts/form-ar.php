<div id="contact-form">
    <?php
    $feedback_block = module_invoke('webform', 'block_view', 'client-block-30');
    print render($feedback_block['content']);
    ?>
</div>