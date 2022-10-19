<?php
/**
 * @package   F8\StoreConfig\Helper
 * @author    Maneza F8
 * @date      13-10-2022
 * @copyright Copyright © 2022 F8
 */
namespace F8\StoreConfig\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

/**
 * Class ConfigData
 * @package F8\StoreConfig\Helper
 */
class ConfigData extends AbstractHelper
{
    const XML_PATH_STORE_CONFIG = 'get_store_section/get_store_groups/get_store_field';
    /**
     * Config constructor.
     *
     * @param Context $context
     */
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * Use get config store to pass the admin config
     * 
     * @param null $storeId
     * @return mixed
     */
    public function getConfigStoreId($storeId = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_STORE_CONFIG,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
}
