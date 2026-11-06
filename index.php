<?php

    header("Content-Type: text/html; charset=UTF-8");

    $sapi = php_sapi_name();

    $superglobals = [
        '_GET',
        '_POST',
        '_COOKIE',
        '_FILES',
        '_SERVER',
        '_REQUEST',
        '_SESSION',
        '_ENV',
        '_GLOBALS',
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspector de SAPI de PHP</title>
</head>
<body>
    <h1>Inspector de SAPI de PHP</h1>
    <p>SAPI actual: <?php echo $sapi; ?></p>

    <table>
        <thead>
            <tr>
                <th>Superglobal</th>
                <th>Disponible?</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($superglobals as $global): ?>
                <tr>
                    <td><?php echo '$' . $global; ?></td>
                    <td><?php echo isset($GLOBALS[$global]) ? 'Si' : 'No'; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>