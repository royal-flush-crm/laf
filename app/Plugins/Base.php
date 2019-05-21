<?php

namespace App\Plugins;

use Yaf_Plugin_Abstract as Plugin_Abstract;
use Yaf_Request_Abstract as Request;
use Yaf_Response_Abstract as Response;

abstract class Base extends Plugin_Abstract
{
    /**
     * This is the earliest hook in Yaf plugin hook system, if a custom plugin implement this method, then it will be called before routing a request.
     *
     * @link http://www.php.net/manual/en/yaf-plugin-abstract.routerstartup.php
     *
     * @param Request $request
     * @param Response $response
     */
    public function routerStartup(Request $request, Response $response)
    {
    }

    /**
     * This hook will be trigged after the route process finished, this hook is usually used for login check.
     *
     * @link http://www.php.net/manual/en/yaf-plugin-abstract.routershutdown.php
     *
     * @param Request $request
     * @param Response $response
     */
    public function routerShutdown(Request $request, Response $response)
    {
    }

    /**
     * @link http://www.php.net/manual/en/yaf-plugin-abstract.dispatchloopstartup.php
     *
     * @param Request $request
     * @param Response $response
     */
    public function dispatchLoopStartup(Request $request, Response $response)
    {
    }

    /**
     * This is the latest hook in Yaf plugin hook system, if a custom plugin implement this method, then it will be called after the dispatch loop finished.
     *
     * @link http://www.php.net/manual/en/yaf-plugin-abstract.dispatchloopshutdown.php
     *
     * @param Request $request
     * @param Response $response
     */
    public function dispatchLoopShutdown(Request $request, Response $response)
    {
    }

    /**
     * @link http://www.php.net/manual/en/yaf-plugin-abstract.predispatch.php
     *
     * @param Request $request
     * @param Response $response
     */
    public function preDispatch(Request $request, Response $response)
    {
    }

    /**
     * @link http://www.php.net/manual/en/yaf-plugin-abstract.postdispatch.php
     *
     * @param Request $request
     * @param Response $response
     */
    public function postDispatch(Request $request, Response $response)
    {
    }

    /**
     * @link http://www.php.net/manual/en/yaf-plugin-abstract.preresponse.php
     *
     * @param Request $request
     * @param Response $response
     */
    public function preResponse(Request $request, Response $response)
    {
    }
}
