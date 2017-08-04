<?php

namespace Imposition\Test;

use Zend\Mvc\ModuleRouteListener;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Stdlib\Hydrator\ArraySerializable;
use DataAccess\DataAccessResultSet;


return array(
    'modules' => array(
        'ModuleName',
    ),
    'module_listener_options' => array(
        'config_glob_paths' => array(
            'config/global.php',
            'config/autoload/local.php'
        ),
        'module_paths' => array(
            'module',
            'vendor',
        ),
    ),
    'invokables' => array(
    ),
    'aliases' => array(
    ),
    'factories' => array(
        'TestDatabasePDOSqlite' => function ($sm) {
            $dbAdapter = $sm->get("testing_db");

            $pdo = $dbAdapter->getDriver()->getConnection()->getResource();
            if (!$pdo instanceof \PDO) {
                throw new ServiceNotCreatedException('Connection resource must be an instance of PDO');
            }
            return $pdo;
        },
        'TestDbAdapter' => function ($sm) {
            $dbAdapter = $sm->get("testing_db");

            return $dbAdapter;
        },

    ),
);
