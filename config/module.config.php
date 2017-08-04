<?php

    return array(
        'router' => array(
            'routes' => array(
                'modulename-info' => array(
                    'type' => 'segment',
                    'options' => array(
                        'route' => '/composer/info',
                        'defaults' => array(
                                'controller' => 'ModuleName\Controller\Rest\Info',
                        ),
                    ),
                ),

            ),
        ),
        'controllers' => array(
            'invokables' => array(
                'ModuleName\Controller\Rest\Info'          => 'ModuleName\Controller\Rest\InfoController',
            ),
        ),
        'view_manager' => array(
            'strategies' => array(
                'ViewJsonStrategy',
            ),
        ),
    );
