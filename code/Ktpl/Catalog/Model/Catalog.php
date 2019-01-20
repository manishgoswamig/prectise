<?php
namespace Ktpl\Catalog\Model;

class Catalog extends \Magento\Framework\Model\AbstractModel implements \Ktpl\Catalog\Api\Data\CatalogInterface
{

    protected $_productFactory;

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     * @param \Magento\Catalog\Model\ProductFactory $productFactory
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Ktpl\Catalog\Model\ResourceModel\Catalog $resource = null,
        \Ktpl\Catalog\Model\ResourceModel\Catalog\Collection $resourceCollection = null
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection);

        $this->_productFactory = $productFactory;
    }

     /**
     * @return int|null
     */
    public function getId()
    {
        return $this->getData('id');
    }

    /**
     * @param int $id
     * @return \Ktpl\Catalog\Api\Data\CatalogInterface
     */
    public function setId($id)
    {
        $this->setData('id', $id);
        return $this;
    }

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Ktpl\Catalog\Model\ResourceModel\Catalog');
    }



    /**
     * Get the product associated with this text
     * @return \Magento\Catalog\Api\Data\ProductInterface
     */
    public function getProductId()
    {
        return $this->_productFactory
            ->create()
            ->load($this->getData('getProductId'));
    }

    /**
     * Set the project associated with this text8
     * @param \Magento\Catalog\Api\Data\ProductInterface $productInterface
     * @return \Ktpl\Catalog\Api\Data\CatalogInterface
     */
    public function setProductId(\Magento\Catalog\Api\Data\ProductInterface $productInterface)
    {
        $this->setData('product_id', $productInterface->getId());
        return $this;
    }

    /**
     * Get the text
     * @return string
     */
    public function getText()
    {
        return $this->getData('text');
    }

    /**
     * Set the text
     * @param string $text
     * @return \Ktpl\Catalog\Api\Data\CatalogInterface
     */
    public function setText($text)
    {
        $this->setData('text', $text);
        return $this;
    }
}
