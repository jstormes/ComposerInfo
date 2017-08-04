<?php
namespace JStormes\ComposerInfo\Controller;


use Zend\Mvc\Controller\AbstractRestfulController;


/**
 * Class InfoController
 *
 * @package JStormes\ComposerInfo\Rest
 */
class LockController extends AbstractRestfulController
{
    /**
     * Return list of resources
     *
     * @return mixed
     */
    public function getList()
    {
        readfile('composer.lock');
        exit();
    }

}
