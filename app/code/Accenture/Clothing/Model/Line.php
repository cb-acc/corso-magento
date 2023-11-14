<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Accenture\Clothing\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * @inheritdoc
 *
 * @codeCoverageIgnore
 */
class Line extends AbstractModel
{
    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        /*$this->_init(ResourceModel::class);*/
        $this->_init('\Accenture\Clothing\Model\ResourceModel\Line');
    }
}
