<?php
return array(
    'db' => array(
        'adapters' => array(
            'testing_db' => array(
                'driver'         => 'Pdo',
                'dsn'            => 'sqlite::memory:',
                'username'       =>'',
                'password'      =>'',
            ),
        ),
        'optimizers' => array('index_merge', 'mrr')
    ),
);

