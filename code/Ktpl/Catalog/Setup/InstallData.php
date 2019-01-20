<?php
namespace Ktpl\Catalog\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Catalog\Model\ResourceModel\Eav\Attribute;
use Magento\Catalog\Model\Product;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface {

    /**
     * Hello World Model Factory
     * @var EavSetupFactory
     */
    private $_helloTextFactory;

    /**
     * Init
     * @param \Ktpl\Catalog\Model\CatalogFactory $catalogFactory
     */
    public function __construct(
        \Ktpl\Catalog\Model\CatalogFactory $catalogFactory
    )
    {
        $this->_helloTextFactory = $catalogFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context) {
        $setup->startSetup();
        $helloText = $this->_helloTextFactory->create();
        $helloText
            ->setData('product_id',14)
            ->setText('Das ist nur ein Test')
            ->save();
        $setup->endSetup();
    }
}
