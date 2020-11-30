<?php

// src/Controller/FrontendModule/ExampleController.php
namespace ShopExtension\Controller\FrontendModule;
//namespace ShopExtension;

use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\ServiceAnnotation\FrontendModule;
use Contao\ModuleModel;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @FrontendModule("shop_user",
 *   category="miscellaneous", 
 *   template="mod_shop_user",
 *   renderer="forward"
 * )
 */
class ShopUserController extends AbstractFrontendModuleController
{
    protected function getResponse(Template $template, ModuleModel $model, Request $request): ?Response
    {
        return $template->getResponse();
    }
}