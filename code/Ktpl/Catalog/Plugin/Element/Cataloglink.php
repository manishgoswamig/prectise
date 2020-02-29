<?php
namespace Ktpl\Catalog\Plugin\Element;

class Cataloglink
{
    public function beforeExecuteMethod(\Ktpl\Catalog\Block\Element\Cataloglink $subject,$number,$firstVariable,$secVariable,$operation){


        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/logfile.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('-------------------------------');
        $logger->info(get_class().' : '.'beforeExecuteMethod');


        switch ($operation) {
            case 'add':
                return $firstVariable+$secVariable;
                break;
            case 'add':
                return $firstVariable+$secVariable;
                break;
            case 'add':
                return $firstVariable+$secVariable;
                break;
            case 'add':
                return $firstVariable+$secVariable;
                break;
            default:
                return 'Something elese';
                break;
        }


    }


}



 ?>
