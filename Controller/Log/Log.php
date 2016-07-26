<?php
/**
 * Created by PhpStorm.
 * User: sandor
 * Date: 26/07/16
 * Time: 15:33
 */

namespace Czettner\Routerlogger\Controller\Log;

use Magento\Framework\App\RouterList;
use Magento\Framework\App\Action\Context;


class Log extends \Magento\Framework\App\Action\Action {

    /**
     * @var RouterList
     */
    protected $_routerList;

    /**
     * @param Context $context
     * @param RouterList $routerList
     */
    public function __construct(
        Context $context,
        RouterList $routerList
    ) {
        $this->_routerList = $routerList;
        parent::__construct($context);
    }

    /**
     * say hello text
     */
    public function execute()
    {
        var_dump($this->getRoutersString());
        die("All routers have been printed");
    }

    protected function getRoutersString()
    {
        $ret = '';
        foreach ($this->_routerList as $router) {
            $ret .= get_class($router)."\n";
        }
        return $ret;
    }
}
