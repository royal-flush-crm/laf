<?php



use Yaf\Controller_Abstract;

/**
 * Class BaseController.
 *
 * @property string $_module
 * @property string $_name
 * @property Yaf\Request_Abstract $_request
 * @property Yaf\Response_Abstract $_response
 * @property array $_invoke_args
 * @property Yaf\View_Interface $_view
 *
 * @method render($tpl, array $parameters = null)
 * @method display($tpl, array $parameters = null)
 * @method getRequest()
 * @method getResponse()
 * @method getModuleName()
 * @method getView()
 * @method initView(array $options = null)
 * @method setViewpath($view_directory)
 * @method getViewpath()
 * @method forward($module, $controller = null, $action = null, array $parameters = null)
 * @method redirect($url)
 * @method getInvokeArg($name)
 * @method getInvokeArgs()
 * @method init()
 */
abstract class BaseController extends Controller_Abstract
{
}
