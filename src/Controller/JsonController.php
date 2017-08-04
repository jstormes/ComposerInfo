<?php
namespace JStormes\ComposerInfo\Controller;


use Zend\Mvc\Controller\AbstractRestfulController;


/**
 * Class InfoController
 *
 * @package JStormes\ComposerInfo\Rest
 */
class JsonController extends AbstractRestfulController
{
    /**
     * Return list of resources
     *
     * @return mixed
     */
    public function getList()
    {
        readfile('composer.json');
        exit();
    }

}
