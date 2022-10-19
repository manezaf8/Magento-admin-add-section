<?php
/**
 * @package   F8\StoreConfig\Model\Adminhtml\System\Config\Source\Store
 * @author    Maneza F8
 * @date      13-10-2022
 * @copyright Copyright © 2022 F8
 */

namespace F8\StoreConfig\Model\Adminhtml\System\Config\Source\Store;

use Magento\Framework\Option\ArrayInterface;
use Magento\Store\Model\ResourceModel\Store\CollectionFactory as StoreCollectionFactory;

/**
 * Class Group
 * @package F8\StoreConfig\Model\Adminhtml\System\Config\Source\Store
 */
class Collection implements ArrayInterface
{
    protected $storeOptions;

    /**
     * @var StoreCollectionFactory
     */
    private $StoreCollectionFactory;

    /**
     * Group Constructor
     *
     * @param StoreCollectionFactory $StoreCollectionFactory
     */
    public function __construct(
        StoreCollectionFactory $StoreCollectionFactory
    ) {
        $this->StoreCollectionFactory = $StoreCollectionFactory;
    }
    
    /**
     * @return array
     */
    public function toOptionArray()
    {
        if (!$this->storeOptions) {
            $this->storeOptions = $this->StoreCollectionFactory->create()->loadData()->toOptionArray();
        }
        return $this->storeOptions;
    }
}
