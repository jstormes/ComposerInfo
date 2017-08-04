<?php


return array(
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Db\Adapter\AdapterAbstractServiceFactory',
        ),
    ),
    'db'              => array(
        'adapters' => array(
        ),
    ),
);
