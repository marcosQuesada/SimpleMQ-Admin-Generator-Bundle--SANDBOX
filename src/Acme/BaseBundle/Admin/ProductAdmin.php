<?php
namespace Acme\BaseBundle\Admin;

use SimpleMQ\AdminGeneratorBundle\Admin\Admin as Base;
use Acme\BaseBundle\Form\ProductType;
use Acme\BaseBundle\Controller\ProductoAdminController;

class ProductAdmin extends Base
{
    // public function getForm()
    // {
    //     return new ProductType();
    // }    

    // public function getGridFields()
    // {
    //     return array(
    //                 array('fieldName'=>'id','type'=>'integer'),
    //                 array('fieldName'=>'name','type'=>'string'),
    //                 array('fieldName'=>'slug','type'=>'string'),
    //         );        
    // } 

    // public function getShowFields()
    // {
    //     return array(
    //                 array('fieldName'=>'id','type'=>'integer'),
    //                 array('fieldName'=>'name','type'=>'string'),
    //                 array('fieldName'=>'slug','type'=>'string'),
    //         );        
    // } 


    public function addCustomRoutes()
    {  
        return array(
                    array(
                        'ruta' => 'testing_route',
                        'pattern'=> 'testing/{name}',
                        'defaults' =>array(
                            '_controller' => 'AcmeBaseBundle:Default:index',
                        )   
                    ),
                    array(
                        'ruta' => 'testing_route_b',
                        'pattern'=> 'testing/{name}',
                        'defaults' =>array(
                            '_controller' => 'AcmeBaseBundle:Default:index',
                        )   
                    )                    
                );
    }


}