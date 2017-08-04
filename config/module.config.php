<?php
    return array(
        'router' => array(
            'routes' => array(
                'modulename-ping' => array(
                    'type' => 'segment',
                    'options' => array(
                        'route' => '/v1/moudlename/ping',
                        'defaults' => array(
                                'controller' => 'ModuleName\Controller\Rest\Ping',
                        ),
                    ),
                ),

            ),
        ),
        'controllers' => array(
            'invokables' => array(
                'ModuleName\Controller\Rest\Ping'          => 'ModuleName\Controller\Rest\Ping',
            ),
        ),
        'view_manager' => array(
            'strategies' => array(
                'ViewJsonStrategy',
            ),
        ),
    );
