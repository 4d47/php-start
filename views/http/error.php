<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $error->reason ?></title>
    </head>
    <body>
        <p><?= "$error->code $error->reason" ?></p>
    </body>
</html>
