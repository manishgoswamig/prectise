<?php
namespace Ktpl\Catalog\Plugin\Element;

class CataloglinkBefore
{
    public function beforeExecuteMethod(){
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/logfile.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('-------------------------------');
        $logger->info(get_class().' : '.'beforeExecuteMethod');
    }

    public function aroundExecuteMethod(){
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/logfile.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('-------------------------------');
        $logger->info(get_class().' : '.__FUNCTION__);
    }

    public function afterExecuteMethod(){
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/logfile.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('-------------------------------');
        $logger->info(get_class().' : '. __FUNCTION__);
    }

}
?>
