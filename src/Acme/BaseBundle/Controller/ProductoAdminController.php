<?php

namespace Acme\BaseBundle\Controller;

use SimpleMQ\AdminGeneratorBundle\Controller\CRUDController as Base;

class ProductoAdminController extends Base
{
	//Extiende al CRUDController ??? svc!!
	//clase importada por RouteLoader
	// si existe Clase Controller on SRVC
	// getClassMethods Filter By Action 
	// if action is (edit, list, new, ...)
	// -in found Action event replaces route mapping on loading
	// -debe modificar el ROUTE generator para entidades
    public function listAction()
    {

    }	
}