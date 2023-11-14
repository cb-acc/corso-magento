<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Accenture\Clothing\Plugin;

use Accenture\Clothing\ViewModel\ProductAdditionalData;

/**
 * Cleaning no-route page cache for the product details page after enabling product that is not assigned to a category
 */
class SeasonData
{
    /**
     * @param ProductAdditionalData $viewModel
     * @param string $seasonCode
     * @return string[]
     */
    public function beforeGetSeason(
        ProductAdditionalData $viewModel,
        string $seasonCode = ""
    ) : array {

        if ($seasonCode == "") {
            $seasonCode = "Inverno";
        }

        return [$seasonCode];
    }

    /**
     * @param ProductAdditionalData $viewModel
     * @param $result
     * @return string
     */
    public function afterGetSeason(
        ProductAdditionalData $viewModel,
        $result
    ) : string
    {
        return "<h4 class='afterGetSeason'>" . $result . "</h4>";
    }
}
