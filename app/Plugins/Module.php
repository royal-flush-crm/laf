<?php

namespace App\Plugins;

use Yaf\Application;
use Yaf\Registry;
use Yaf\Request_Abstract as Request;
use Yaf\Response_Abstract as Response;

class Module extends Base
{
    /**
     * modules plugin.
     *
     * @param Request  $request
     * @param Response $response
     *
     * @return bool|void
     */
    public function routerStartup(Request $request, Response $response)
    {
        parent::routerStartup($request, $response);

        $config = Registry::get('config');
        $defaultModule = $config['laf']['router']['module'] ?: 'Index';
        $defaultController = $config['laf']['router']['controller'] ?: 'Index';
        $defaultAction = $config['laf']['router']['action'] ?: 'Index';

        $baseUri = $request->getBaseUri();
        $requestUri = $request->getRequestUri();

        $modules = Application::app()->getModules();
        $requestUri = ltrim(preg_replace("|^{$baseUri}|is", '', $requestUri, 1), '/');

        if ($requestUri) {
            $uriArray = explode('/', $requestUri);
            $module = ucfirst(strtolower($uriArray[0]));

            if (!in_array($module, $modules)) {
                $uriArray = [
                    $defaultModule,
                    $defaultController,
                    $defaultAction,
                ];
            }
        } else {
            $uriArray = [
                $defaultModule,
                $defaultController,
                $defaultAction,
            ];
        }

        $requestUri = "{$baseUri}/".implode('/', $uriArray);
        $request->setRequestUri($requestUri);
    }
}
