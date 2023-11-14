<?php
declare(strict_types=1);

namespace Accenture\Clothing\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * ProductAdditionalData model
 */
class ProductAdditionalData implements ArgumentInterface
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
    }

    /*
     * return mixed
     */

    public function showAdditionalData()
    {
        return $this->scopeConfig->getValue('catalog/frontend/show_product_additional_data');
    }

    public function getSeason($seasonCode = "")
    {
        return $seasonCode . "-2023";
    }
}
