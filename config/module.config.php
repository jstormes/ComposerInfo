<?php

    return array(
        'router' => array(
            'routes' => array(

                'rest' => array(
                    'type'    => 'Literal',
                    'options' => array(
                        'route'    => '/rest',
                        'defaults' => array(
                            '__NAMESPACE__' => 'Application\Controller',
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
                'ModuleName\Controller\Rest\Info'          => 'ModuleName\Controller\Rest\InfoController',
            ),
        ),
        'view_manager' => array(
            'strategies' => array(
                'ViewJsonStrategy',
            ),
        ),
    );
