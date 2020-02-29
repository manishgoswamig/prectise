<?php
namespace Ktpl\Catalog\Block\Element;

use \Magento\Framework\View\Element\Template;

class Cataloglink extends \Magento\Framework\View\Element\Template
{


     /**
     * Constructor
     *
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function getLink()
    {
        return 'Lested link';
    }

    public function executeMethod($number){
        return $number;
    }
}
