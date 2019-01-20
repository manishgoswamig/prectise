<?php
namespace Ktpl\Catalog\Block\Catalog;

class Text extends \Magento\Catalog\Block\Product\View\AbstractView
{
    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \Magento\Framework\Stdlib\ArrayUtils $arrayUtils,
        \Ktpl\Catalog\Model\Catalog $ktplCatalog,
        \Ktpl\Catalog\Model\ResourceModel\Catalog\CollectionFactory $catalogTextCollectionFactory,
        \Ktpl\Catalog\Helper\Data $dataHelper,
        array $data = []
    ) {

        parent::__construct($context, $arrayUtils, $data);
        $this->_catalogTextCollectionFactory = $catalogTextCollectionFactory;
        $this->_dataHelper = $dataHelper;
    }

    /**
     * Get the name of the current product
     * @return string
     */
    public function getProductName()
    {
        return $this->getProduct()->getName();
    }

    /**
     * Get product-specifc text
     * @return string
     */
    public function getText()
    {
        $helloTextCollection = $this->_catalogTextCollectionFactory->create();
        $helloTextCollection->addProductFilter($this->getProduct());

        $entireText = "";
        foreach ($helloTextCollection as $helloText) {
            $entireText .= $helloText->getText();
        }

        if ($entireText == "") {
            $entireText = "Leider hat mich niemand lieb :(";
        }
        return $entireText;
    }

    /**
     * Return the color for the HelloProduct text.
     * @return string
     */
    public function getColor()
    {
        return $this->_dataHelper->getSomeColor();
    }

    /**
     * Returns the text that was injected in the ProductLoadInjecter
     * @return string
     */
    public function getObserverText()
    {

            echo '<pre>';
            var_dump($this->getProduct()->getData());
            die();

       // return $this->getProduct()->getData('ktpl_catalog'); //$this->getProduct()->getData('tudock_helloworld');
    }

    /**
     * Get the URL that points to the helloworld_index_index route.
     */
    public function getHelloWorldUrl()
    {
            /*echo '<pre>';
            var_dump('likmekdjfkladj');
            die();*/

        return $this->getUrl('catalog/normal_test_method/index');
    }
}
