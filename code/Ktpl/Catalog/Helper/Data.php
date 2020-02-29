<?php
namespace Ktpl\Catalog\Helper;

use Magento\Framework\App\Helper\Context;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

	 public function __construct(Context $context)
    {
        parent::__construct($context);
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
