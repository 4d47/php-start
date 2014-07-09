<?php

return
    array(
        'controllers' =>
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
