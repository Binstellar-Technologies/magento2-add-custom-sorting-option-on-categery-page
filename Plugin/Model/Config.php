<?php
namespace Binstellar\Sorting\Plugin\Model;

use Magento\Store\Model\StoreManagerInterface;
class Config
{
    protected $_storeManager;

public function __construct(
    StoreManagerInterface $storeManager
) {
    $this->_storeManager = $storeManager;

}

/**
 * Adding custom options and changing labels
 *
 * @param \Magento\Catalog\Model\Config $catalogConfig
 * @param [] $options
 * @return []
 */
public function afterGetAttributeUsedForSortByArray(\Magento\Catalog\Model\Config $catalogConfig, $options)
{
    $store = $this->_storeManager->getStore();
        $currencySymbol = $store->getCurrentCurrency()->getCurrencySymbol();

        unset($options['price']);

        $options['name'] = __( 'A - Z' );

        //New sorting options
        $customOption['desc_name'] = __( ' Z - A' );

        $customOption['price'] = __( 'Low To High Price' );

        $options['high_to_low_price'] = __('High To Low Price');

        $options = array_merge($customOption, $options);

    return $options;
}
}