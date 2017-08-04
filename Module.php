<?php
namespace ModuleName;

use Zend\Mvc\MvcEvent;
use Zend\Mvc\ModuleRouteListener;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Stdlib\Hydrator\ArraySerializable;
use Zend\Db\TableGateway\Feature\MasterSlaveFeature;

use Auth\Service\AuthService;
use User\Model\UsersTable;
use Job\Model\JobItemsTable;
use DataAccess\DataAccessResultSet;
//use DataAccess\IMS\Table\ManfImpositionXmlSet;

use Imposition\Model\ImpositionSumary;
use Imposition\Model\JobTableFilter;
use Imposition\Model\JobTableFilterTable;
use Imposition\Model\ImpositionJobItems;
use Imposition\Model\ImpositionJobItemsSelected;
use Imposition\Table\JobsWorkingDetailView;

use Imposition\Model\ImpositionXmlSets;
use Imposition\Model\ImpositionXmlSetsTable;
use Imposition\Service\JobItemService;
use Imposition\Service\AwsS3ImpositionService;

//use Imposition\Exception\ImpositionException;

class Module
{
    /**
     * @param MvcEvent $e
     */
    public function onBootstrap(MvcEvent $e)
    {
        //$eventManager        = $e->getApplication()->getEventManager();
        //$moduleRouteListener = new ModuleRouteListener();
        //$moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {

        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    /**
     * @return array
     */
    public function getServiceConfig()
    {
        return array(
            'factories' => array(

            ),
        );
    }
}