<?php
namespace Ktpl\Catalog\Helper;

use Magento\Framework\App\Helper\Context;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

	 public function __construct(Context $context)
    {
        echo '<pre/>'; die('helper is calling herer....');
    }

    /**
     * Returns a random CSS color
     * @return string
     */
    public function getSomeColor()
    {
        return 'rgb('.rand(0, 255).','.rand(0, 255).','.rand(0, 255).')';
    }

    public function attachedFunc(){
    	return 'Helper is calling ';
    }
}
