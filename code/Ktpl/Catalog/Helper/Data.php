<?php
namespace Ktpl\Catalog\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    /**
     * Returns a random CSS color
     * @return string
     */
    public function getSomeColor()
    {
        return 'rgb('.rand(0, 255).','.rand(0, 255).','.rand(0, 255).')';
    }
}
