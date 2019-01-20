<?php
namespace Ktpl\Catalog\Api\Data;

interface CatalogInterface
{

    const ID = 'id';
    const PRODUCT = 'product_id';
    const TEXT = 'text';

    /**
     * @return int|null
     */
    public function getId();

    /**
     * @param int $id
     * @return void
     */
    public function setId($id);

     /**
      * @return int|null
      */
    public function getProductId();

      /**
       * @param \Magento\Catalog\Api\Data\ProductInterface $productInterface
       * @return void
       */
    public function setProductId(\Magento\Catalog\Api\Data\ProductInterface $productInterface);

      /**
       * @return string
       */
    public function getText();

        /**
         * @param string $text
         * @return void
         */
    public function setText($text);

    /**
     * Load another text by id
     * @param integer $text_id
     * @return \Ktpl\Catalog\Api\Data\CatalogInterface
     * @api
     */

    public function load($text_id);

      /**
       * Saves this text
       * @return \Ktpl\Catalog\Api\Data\CatalogInterface
       * @api
       */
    public function save();
}
