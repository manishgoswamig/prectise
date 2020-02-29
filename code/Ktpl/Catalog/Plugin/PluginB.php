<?php
namespace Ktpl\Catalog\Plugin;

use Magento\Framework\App\RequestInterface;

class PluginB
{
    public function beforeDispatch(\Magento\Framework\App\Action\Action $subject, RequestInterface $request)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/logfile.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('----------------------------------------');
        $logger->info(get_class().' :: '.__FUNCTION__);
    }

    public function aroundDispatch(\Magento\Framework\App\Action\Action $subject, callable $proceed, RequestInterface $request)
    {

        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/logfile.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('----------------------------------------');
        $logger->info(get_class().' :: '.__FUNCTION__);

        $result = $proceed($request);
        return $result;
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
