<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Accenture\Clothing\Model\ResourceModel\Line;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Accenture\Clothing\Model\Line as LineModel;
use Accenture\Clothing\Model\ResourceModel\Line as LineResourceModel;

/**
 * Resource Collection of Line entities
 *
 * @api
 */
class Collection extends AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'clothing_lines_id';

    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init(LineModel::class, LineResourceModel::class);
    }
}
