<?php
namespace MagePal\ProductQuestions\Plugin\Catalog\Controller\Product;

use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Exception\NoSuchEntityException;

class View
{
    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * View constructor.
     *
     * @param RequestInterface $request
     * @param ProductRepositoryInterface $productRepository
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        RequestInterface $request,
        ProductRepositoryInterface $productRepository,
        StoreManagerInterface $storeManager
    ) {
        $this->request = $request;
        $this->productRepository = $productRepository;
        $this->storeManager = $storeManager;
    }

    public function afterExecute(
        \Magento\Catalog\Controller\Product\View $subject,
        $resultPage
    ) {
        if ($resultPage instanceof ResultInterface) {
            $productId = (int) $this->request->getParam('id');
            if ($productId) {
                try {
                    $product = $this->productRepository->getById($productId, false, $this->storeManager->getStore()->getId());
                    if ($product->getFinalPrice() <= 70) {
                        $pageConfig = $resultPage->getConfig();
                        $pageConfig->setPageLayout('2columns-left');
                    }
                } catch (NoSuchEntityException $e) {
                    echo $e->getMessage();
                    die();
                }
            }
        }

        return $resultPage;
    }
}
