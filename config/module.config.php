<?php

    return array(
        'router' => array(
            'routes' => array(

                'rest' => array(
                    'type'    => 'Literal',
                    'options' => array(
                        'route'    => '/composer',
                        'defaults' => array(
                            '__NAMESPACE__' => 'JStormes\Controller',
                        ),
                    ),
                    'may_terminate' => true,
                    'child_routes' => array(
                        'default' => array(
                            'type'    => 'Segment',
                            'options' => array(
                                'route'    => '/:controller[/:id][/]',
                                'constraints' => array(
                                    'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                ),
                                'defaults' => array(
                                ),
                            ),
                        ),
                    ),
                ),

            ),
        ),
        'controllers' => array(
            'invokables' => array(
                'lock'          => JStormes\ComposerInfo\Controller\LockController::class,
                'json'          => JStormes\ComposerInfo\Controller\JsonController::class,
            ),
        ),
        'view_manager' => array(
            'strategies' => array(
                'ViewJsonStrategy',
            ),
        ),
    );
