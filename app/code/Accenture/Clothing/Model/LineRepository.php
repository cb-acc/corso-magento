<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);
namespace Accenture\Clothing\Model;

use Accenture\Clothing\Api\LineRepositoryInterface;
use Accenture\Clothing\Model\ResourceModel\Line\CollectionFactory;


class LineRepository implements LineRepositoryInterface {

    private CollectionFactory $collectionFactory;

    /**
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        CollectionFactory $collectionFactory,
    )
    {
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @inheritDoc
     */
    public function getLines() : array
    {
        $collection = $this->collectionFactory->create();
        $collection->addFieldToSelect('*');

        $array = [];

        foreach ($collection as $item) {
            $array[] = [
                'lines_id' => $item->getData('clothing_lines_id'),
                'lines_name' => $item->getData('clothing_lines_name')

            ];
        }

        return $array;
    }
}
