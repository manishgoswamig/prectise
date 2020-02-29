<?php
namespace Ktpl\Catalog\Plugin;

use Magento\Framework\App\RequestInterface;

class PluginA
{
    public function beforeDispatch(\Magento\Framework\App\Action\Action $subject, RequestInterface $request)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/logfile.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('----------------------------------------');
        $logger->info(get_class().' :: '.__FUNCTION__);
    }



    public function afterDispatch(\Magento\Framework\App\Action\Action $subject,$result)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/logfile.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('----------------------------------------');
        $logger->info(get_class().' :: '.__FUNCTION__);
        return $result;
    }

}
