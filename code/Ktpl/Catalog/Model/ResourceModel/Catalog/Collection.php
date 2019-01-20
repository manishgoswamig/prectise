<?php
namespace Ktpl\Catalog\Model\ResourceModel\Catalog;

use Magento\Catalog\Api\Data\ProductInterface;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Initialization here
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Ktpl\Catalog\Model\Catalog', 'Ktpl\Catalog\Model\ResourceModel\Catalog');
    }

    /**
     * Add Product Filter to Collection
     *
     * @param int|array|ProductInterface $product
     * @return $this
     */
    public function addProductFilter($product){
        $id = -1;
        if($product instanceof ProductInterface){
            $id = $product->getId();
        } else if(is_numeric($product)){
            $id = $product;
        }
        $this->addFieldToFilter('product_id',$id);
        return $this;
    }
}
