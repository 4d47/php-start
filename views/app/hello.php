
<?php $GLOBALS['title'] = 'Hello'; ?>

<?php if ($name): ?>
    <p>Hello <?= htmlspecialchars(ucfirst($name)) ?></p>
<?php else: ?>
    <p>Hello Stranger</p>
<?php endif ?>

