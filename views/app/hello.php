
<?php $this->title = 'Hello'; ?>

<?php if ($name): ?>
    <p>Hello <?= htmlspecialchars(ucfirst($name)) ?></p>
<?php else: ?>
    <p>Hello Stranger</p>
<?php endif ?>

<?php
if (!empty($_GET['debug'])):
    // Could have as well have put `views/partials` in the include_path
    echo $this->partial(
        'views/partials/debug.php',
        array('vars' => get_defined_vars())
    );
endif
?>
