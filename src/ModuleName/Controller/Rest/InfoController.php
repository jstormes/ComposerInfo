<?php
namespace ShippingMMS\Controller\Rest;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
use \Exception;

/**
 * Class StatusController
 *
 * @package ShippingMMS\Controller\Rest
 */
class InfoController extends AbstractRestfulController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    /**
     * Return list of resources
     *
     * @return mixed
     */
    public function getList()
    {
        return new JsonModel(array(
            array('name' => 'test'),
            array('name' => 'second')
        ));
    }

    /**
     * Return single resource
     *
     * @param  mixed $id
     * @return mixed
     */
    public function get($id)
    {
        //TODO: Implement Method
    }

    /**
     * Create a new resource
     *
     * @param  mixed $data
     * @return mixed
     */
    public function create($data)
    {
        //TODO: Implement Method
    }

    /**
     * Update an existing resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return mixed
     */
    public function update($id, $data)
    {
        //TODO: Implement Method
    }

    /**
     * Delete an existing resource
     *
     * @param  mixed $id
     * @return mixed
     */
    public function delete($id)
    {
        //TODO: Implement Method
    }
}
