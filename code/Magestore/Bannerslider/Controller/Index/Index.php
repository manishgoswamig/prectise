<?php

/**
 * Magestore
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magestore.com license that is
 * available through the world-wide-web at this URL:
 * http://www.magestore.com/license-agreement.html
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Magestore
 * @package     Magestore_Bannerslider
 * @copyright   Copyright (c) 2012 Magestore (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 */

namespace Magestore\Bannerslider\Controller\Index;

use Magento\Framework\View\Result\PageFactory;

/**
 *
 */
class Index extends \Magestore\Bannerslider\Controller\Index
{

    protected $_storeManager;

    /**
     * Index constructor.
     *
     * @param \Magento\Framework\App\Action\Context                                $context
     * @param \Magestore\Bannerslider\Model\SliderFactory                          $sliderFactory
     * @param \Magestore\Bannerslider\Model\BannerFactory                          $bannerFactory
     * @param \Magestore\Bannerslider\Model\ReportFactory                          $reportFactory
     * @param \Magestore\Bannerslider\Model\ResourceModel\Report\CollectionFactory $reportCollectionFactory
     * @param \Magento\Framework\Controller\Result\RawFactory                      $resultRawFactory
     * @param \Magento\Framework\Logger\Monolog                                    $monolog
     * @param \Magento\Framework\Stdlib\DateTime\Timezone                          $stdTimezone
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magestore\Bannerslider\Model\SliderFactory $sliderFactory,
        \Magestore\Bannerslider\Model\BannerFactory $bannerFactory,
        \Magestore\Bannerslider\Model\ReportFactory $reportFactory,
        \Magestore\Bannerslider\Model\ResourceModel\Report\CollectionFactory $reportCollectionFactory,
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory,
        \Magento\Framework\Logger\Monolog $monolog,
        \Magento\Framework\Stdlib\DateTime\Timezone $stdTimezone,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollection,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context, $sliderFactory, $bannerFactory, $reportFactory, $reportCollectionFactory, $resultRawFactory, $monolog, $stdTimezone);
        $this->_storeManager = $storeManager;
        $this->_categoryCollection = $categoryCollection;
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Default customer account page.
     */
    public function execute()
    {
        $resultRaw = $this->_resultRawFactory->create();
        return $resultRaw;
    }
}
