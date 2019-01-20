<?php
namespace Ktpl\Catalog\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    protected $eavSetupFactory;

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        /**
         * Create table 'ktpl_catalog'
         */
        $table = $setup->getConnection()->newTable(
            $setup->getTable('ktpl_catalog')
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0', 'primary' => true],
            'ID of text'
        )->addColumn(
            'product_id',
            Table::TYPE_INTEGER,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Product ID'
        )->addColumn(
            'text',
            Table::TYPE_TEXT,
            255,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Text'
        )->setComment(
            'CatalogWorld demo table'
        )->addIndex(
            $setup->getIdxName('ktpl_catalog', 'id',\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE),
            'id',
            ['type' =>\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE]
        )->addIndex(
            $setup->getIdxName('ktpl_catalog', 'product_id'),
            'product_id'
        )->addForeignKey(
            $setup->getFkName(
                'ktpl_catalog',
                'product_id',
                'catalog_product_entity',
                'entity_id'
            ),
            'product_id',
            $setup->getTable('catalog_product_entity'),
            'entity_id',
            Table::ACTION_CASCADE
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
