<?php
namespace Ktpl\Catalog\Model\ResourceModel;

class Catalog extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct() {
        $this->_init('ktpl_catalog', 'id');
    }
}
