<?php

return
    array(
        'resources' =>
            array(
                'App\Hello',
            ),
        'definitions' =>
            array(
                'PDO' => array(
                    ':dsn' => 'sqlite:memory:',
                    ':username' => null,
                    ':passwd' => null,
                    ':options' => array(),
                )
            ),
    );
